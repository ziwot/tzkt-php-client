build:
	@rm -rf ./src ./docs ./tests
	@mv README.md BKP.md
	@openapi-generator-cli generate -c config.yaml
	@mv README.md TZKT.md
	@mv BKP.md README.md
	@sed -i 's/"Tzkt\\\\"/"Tzkt\\\\\\\\"/g' ./composer.json
	@sed -i 's/"Tzkt\\\\Test\\\\"/"Tzkt\\\\\\\\Test\\\\\\\\"/g' ./composer.json
	@sed -i 's/TYPE_CONTRACT\/BALANCE_TOO_LOW/TYPE_CONTRACT_BALANCE_TOO_LOW/g' ./src/Model/OperationError.php
	@sed -i 's/TYPE_CONTRACT\/MANAGER\/UNREGISTERED_DELEGATE/TYPE_CONTRACT_MANAGER_UNREGISTERED_DELEGATE/g' ./src/Model/OperationError.php
	@sed -i 's/TYPE_CONTRACT\/NON_EXISTING_CONTRACT/TYPE_CONTRACT_NON_EXISTING_CONTRACT/g' ./src/Model/OperationError.php
	@sed -i 's/TYPE_ERROR\/ID/TYPE_ERROR_ID/g' ./src/Model/OperationError.php
	@contents=`cat composer.json \
	 | jq '.license = "MIT"' \
	 | jq '.description = "Generated OpenAPI client for TZKT"' \
	 | jq '.keywords += ["tezos"]' \
	 | jq '.autoload += {files: [ "src/_bootstrap.php" ]}'` ; \
	echo "$$contents" > composer.json
	# git checkout for additionnal stuff over generated openapi
	@git co src/_bootstrap.php
	@git co src/client.php
