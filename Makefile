build:
	@rm -rf ./src ./docs ./tests
	@openapi-generator-cli generate -c config.yaml
	@sed -i 's/"Tzkt\\\\"/"Tzkt\\\\\\\\"/g' ./composer.json
	@sed -i 's/"Tzkt\\\\Test\\\\"/"Tzkt\\\\\\\\Test\\\\\\\\"/g' ./composer.json
	@contents=`cat composer.json \
	 | jq '.license = "MIT"' \
	 | jq '.description = "Generated OpenAPI client for TZKT"' \
	 | jq '.keywords += ["tezos"]' \
	 | jq '.autoload += {files: [ "src/_bootstrap.php" ]}'` ; \
	echo "$$contents" > composer.json
	# git checkout for additionnal stuff over generated openapi
	@git co src/_bootstrap.php
	@git co src/client.php
