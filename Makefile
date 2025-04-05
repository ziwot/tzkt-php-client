build:
	rm -rf ./lib ./docs
	openapi-generator-cli generate -c config.yaml
	contents=`jq '{name: "ziwot/tzkt-php-client"} + .' composer.json | jq '.license = "MIT"'` ; \
		echo "$$contents" > composer.json
