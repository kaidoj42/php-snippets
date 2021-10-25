# Slugify Array

Generate and add slug to PHP array based on the property provided and returns the formatted PHP array, so it can be 
copied and used in any PHP file.

## Usage

Place your current array into ```input.php```

Run command ```php index.php from to```

- ```from``` = Property from which we should create the slug
- ```to``` = Property into which we place the new slug

## Example 

Input file contents:
```php 
    <?php 
        return [
            ['cat_key' => 'GAME_CARD', 'name' => 'Cards'],
            ['cat_key' => 'GAME_CASUAL', 'name' => 'Casual']
        ];
```

Console output: 
```php 
        [
            ['cat_key' => 'GAME_CARD', 'name' => 'Cards', 'slug' => 'cards'],
            ['cat_key' => 'GAME_CASUAL', 'name' => 'Casual', 'slug' => 'casual']
        ];
```

You can also use JSON input:

```php 
    <?php 
        return json_decode('[{
		"genreId": 36,
		"name": "Overall"
	}, {
		"genreId": 6014,
		"name": "Games"
	}]', true);
```