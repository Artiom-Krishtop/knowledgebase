# Перевод рабочего(боевого) проекта на GIT

### Описание
Это случай, когда есть проект на котором нет гита вовсе. Перед прочтением следует ознакомиться с инструкцией по [Веткам](/git/instructions/branch.md)

### Шаги
1. Настроить на боевом файл окружения .env.php ([Пример](/bitrix/new_project/env))
2. Установить модуль миграций ["sprint.migration"(инструкция)](/git/instructions/migrations.md)
3. Создать приватный репозиторий для нового проекта и настроить git:
    - Создать [.gitignore](/git/gitignore) в корне(внимательно прочитать описание, т.к. могут быть проблемы с символическими ссылками)
    - Далее команды:
    ##### 
        git init
        git remote add origin https://github.com/manao-dev/{имя репозитория}.git
        git add .
        git commit -m "first commit"
        git push -u origin master
    ##### 
<!-- 4. Создать ветку live, которая будет заменять master:
    ##### 
        git checkout -b live
        git push origin live
    #####  -->
4. Создать бэкап и развернуть на тестовом

#### Если тестовый уже есть, то нужно его актуализировать и настроить git:
1. Сделать на боевом бэкап базы данных и перенести на тестовый (например, через restore.php)
2. Настроить git:
    - Создать [.gitignore](/git/gitignore) в корне
    - Далее команды:
    ##### 
        git init
        git remote add origin https://github.com/manao-dev/{имя репозитория}.git
    ##### 
3. Настроить на тестовом файл окружения .env.php ([Пример](/bitrix/new_project/env))
4. Далее по жесткому методу ([пояснения по методу](https://ru.stackoverflow.com/questions/515435/%D0%9A%D0%B0%D0%BA-%D0%BF%D1%80%D0%B8%D0%BD%D1%83%D0%B4%D0%B8%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE-%D0%BF%D0%B5%D1%80%D0%B5%D0%B7%D0%B0%D0%BF%D0%B8%D1%81%D0%B0%D1%82%D1%8C-%D0%BB%D0%BE%D0%BA%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5-%D1%84%D0%B0%D0%B9%D0%BB%D1%8B-%D0%B2%D0%BE-%D0%B2%D1%80%D0%B5%D0%BC%D1%8F-git-pull)):
    ##### 
        git fetch --all
        git reset --hard origin/master
    ##### 
5. Всё. Смотрим через "git status" файлы Untracked и решам нужны они или можно удалить.



[Назад](/bitrix/new_project)