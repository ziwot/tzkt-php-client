build:
	@rm -rf ./src ./docs ./tests
	@openapi-generator-cli generate -c config.yaml
	@sed -i 's/"Tzkt\\\\"/"Tzkt\\\\\\\\"/g' ./composer.json
	@sed -i 's/"Tzkt\\\\Test\\\\"/"Tzkt\\\\\\\\Test\\\\\\\\"/g' ./composer.json
	@contents=`cat composer.json \
	 | jq '.license = "MIT"' \
	 | jq '.description = "Generated OpenAPI client for TZKT"' \
	 | jq '.autoload += {files: [ "src/_bootstrap.php" ]}'` ; \
	echo "$$contents" > composer.json
