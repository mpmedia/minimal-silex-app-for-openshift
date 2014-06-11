#deploy to server
push:
	@git add .
	@git commit -am"${message} `date`"
	@git push
test:
	@phpunit.bat --bootstrap tests/init

.PHONY: push test
