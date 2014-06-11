#deploy to server
push:
	@git add .
	@git commit -am"${message} `date`"
	@git push
test:
	@phpunit.sh test --bootstrap test/init.php

.PHONY: push test
