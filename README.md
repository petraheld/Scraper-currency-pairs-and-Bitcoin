## Scraper  
#### Get currancy pair rates and Bitcoin price in USD  
  
Scrapes data from Yahoo Finance (with user agent). For each currency pair calculates its inverse as well.  
You can get value for any pair you want just check the respective URI at Yahoo Finance:

      http://finance.yahoo.com/q?s=eurjpy=x
      // it's 'eurjpy'

  
Bitcoin rates is the full decoded JSON from Bitstamps' API:  
   
      https://www.bitstamp.net/api/ticker/
      
Values in USD.
