#deploy to server
push:
	git add .
	git commit -am"${message} `date`"
	git push
.PHONY: push
