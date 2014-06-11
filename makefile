#tests
test:
	@phpunit.sh   --bootstrap test/Bootstrap.php test
#deploy to server
push:
	@git add .
	@git commit -am"${message} `date`"
	@git push

.PHONY: push test
