while True:
  import locale
  locale.setlocale(locale.LC_ALL,'')
  print("Welcome to Pizza Perfect")
  size= input("what size would you like?(Large or Extra large)")
  if size in("large" "Large"):
    pizza= 6 
  elif size in("extralarge""extra large""Extralarge""extraLarge""ExtraLarge""Extra Large""Extra large""extra large""extra-large""Extra-Large""Extra-large""extra-Large"):
    pizza= 10
  else:
    print("Error")
    print("the size you wrote was not an option. Please choose'Large''Extra large'")
    break
  topping= input("how many toppings would you like?(1-4)")
  if topping in ("1""one""One"):
    toppings= 1
  elif topping in ("2""two""Two"):
    toppings= 1.75
  elif topping in ("3""three""Three"):
    toppings= 2.50
  elif topping in ("4""four""Four"):
    toppings= 3.35
  else:
    print("Error")
    print("the number of toppings you wrote was not an option.Please write a number from 1-4")
    continue
  print("Pizza:",locale.currency(pizza))
  print("toppings:",locale.currency(toppings))
  Subtotal=(float(pizza+toppings))
  print("Subtotal:",locale.currency(float(Subtotal)))
  Tax= Subtotal*0.13
  print("Tax:",locale.currency(float(Tax)))
  Total= Tax+Subtotal
  print("Total:",locale.currency(float(Total)))
  break