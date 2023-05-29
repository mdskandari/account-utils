## How to Use

1. clone project 
2. make sure wanted ports on docker-compose file is free such as 3306,80 and so on
3. run command ./vendor/bin/sail up
4. make your request to route http[s]://localhost:[port]/api/user/balance for all bank accounts balance
4. make your request to route http[s]://localhost:[port]/api/user/bank/balance?bank=a for single bank account balance
5. done
