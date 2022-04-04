# flux-eco/value-object
in the future, this component should offer different value objects 
to the other micro services. So far, it only offers date, time and uuid.

## Usage

### functional usage
```
<?php
echo fluxValueObject\getNewUuid().PHP_EOL;

echo fluxValueObject\getCurrentTime().PHP_EOL;
```

output
```
a6431a6c-250b-4051-aa01-2d4d31387be9
2022-04-04 20:01:03.000000
```

### object-oriented usage

```
<?php
echo Api::new()->createUuid()->getValue().PHP_EOL;

echo Api::new()->createCurrentTime()->getValue().PHP_EOL.PHP_EOL;;

Api::new()->createUuid()->equals('abc31a6c-250b-4051-aa01-2d4d31387def').PHP_EOL;
Api::new()->createCurrentTime()->equals('2022-04-04 20:01:03.000000').PHP_EOL;
```

output
```
a6431a6c-250b-4051-aa01-2d4d31387be9
2022-04-04 20:01:03.000000

false
true
```

## Contributing :purple_heart:

Please ...

1. ... register an account at https://git.fluxlabs.ch
2. ... create pull requests :fire:

## Adjustment suggestions / bug reporting :feet:

Please ...

1. ... register an account at https://git.fluxlabs.ch
2. ... ask us for a Service Level Agreement: support@fluxlabs.ch :kissing_heart:
3. ... read and create issues