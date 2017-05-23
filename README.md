PHP Docker Playground
===

# Installation
```bash
docker-compose up --build -d
docker-compose run --rm web composer install
```

# Configuration

Configure __phpstorm__:

 1. Docker
 ![image](https://cloud.githubusercontent.com/assets/191520/26373584/5b51dfa2-4002-11e7-9da7-fcdd4fc6fb5e.png)
 
 2. Php
 ![image](https://cloud.githubusercontent.com/assets/191520/26373557/3f017c7c-4002-11e7-8bf3-7b4123d2b4ff.png)

 3. Phpunit
 ![image](https://cloud.githubusercontent.com/assets/191520/26373603/6e733a40-4002-11e7-86c9-a04816083cbb.png)
 
# Working
Enter to the container:
```bash
docker-compose run --rm web bash
```