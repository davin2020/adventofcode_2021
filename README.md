# adventofcode_2021

I've reused my PHP BoilerPlate Template to work through the Advent of Code 2021 challenges at https://adventofcode.com/2021/

For each day, I will write unit tests to help me solve the challenge using the sample data set and also test my code.

So far, the `main` branch contains code for these solved days -
- Day 2 (parts 1 and 2)

## To Setup & Run Locally

1. Clone the repo locally and `cd` to the new directory
2. Run `composer install`
3. Run `composer start`
4. Open `localhost:8095` in a browser

## To Run Unit Tests

`composer test`

NB: this is setup in `composer.json` to run with the `--testdox` option to give more readable test output, like this -
```
> phpunit tests --testdox

BoilerPlate
 ✔ Success AddSomething
 ✔ Failure example numbers not equals
 ✔ Malformed adding int to array returns error

Time: 177 ms, Memory: 4.00 MB

OK (3 tests, 3 assertions)
```

Without `--testdox`, the test output looks like this - 
```
> phpunit tests

...                                                                 3 / 3 (100%)

Time: 241 ms, Memory: 4.00 MB

OK (3 tests, 3 assertions)
```
