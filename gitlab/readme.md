## Гитлаб ##
На тестовом сервере установлен gitlab
Расположен по адресу https://gitlab.dev-bitrix.by/

### Как подключаться по ssh к гитлабу: ###

1. Создать ssh ключ:
```
ssh-keygen -t ed25519
```
2. Т.к. **порт по ssh не стандартный (2022)**, то необходимо создать файл конфига ssh:
```
.ssh/config

Host gitlab.dev-bitrix.by
PreferredAuthentications publickey
IdentityFile ~/.ssh/id_rsa
Port 2022
```
