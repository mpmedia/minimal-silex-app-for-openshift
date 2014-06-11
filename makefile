#tests
test:
	@phpunit.sh   --bootstrap test/Bootstrap.php test
#commit
commit:
	@git add .
	@git commit -am"${message} `date`"
#deploy to server
push: commit
	@git push

.PHONY: push test commit
