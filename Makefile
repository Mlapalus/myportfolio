build:
	$(MAKE) prepare-test
	$(MAKE) analyze
	$(MAKE) tests

unit-tests:
	bin/phpunit --testsuite unit

integration-tests:
	bin/phpunit --testsuite integration

system-tests:
	composer database-test
	bin/phpunit --testsuite system

e2e-tests:
	composer database-panther
	bin/phpunit --testsuite end_to_end

.PHONY: tests
tests:
	composer database
	bin/phpunit --testsuite unit,integration,system,end_to_end


analyze:
	composer valid
	php bin/console doctrine:schema:valid --skip-sync --env=test
	php vendor/bin/phpcs
	php vendor/bin/phpstan -n analyze domain/src src

prepare-dev:
	composer install --prefer-dist
	php bin/console doctrine:database:drop --if-exists -f --env=dev
	php bin/console doctrine:database:create --env=dev
	php bin/console doctrine:schema:update -f --env=dev
	php bin/console doctrine:fixtures:load -n --env=dev

prepare-test:
	composer install --prefer-dist
	php bin/console cache:clear --env=test
	php bin/console doctrine:database:drop --if-exists -f --env=test
	php bin/console doctrine:database:create --env=test
	php bin/console doctrine:schema:update -f --env=test
	php bin/console doctrine:fixtures:load -n --env=test