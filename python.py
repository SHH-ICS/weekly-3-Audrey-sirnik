while True:
  import locale
  print("Welcome to Pizza Perfect")
  size= input("what size would you like?(Large or Extra large)")
  topping= input("how many toppings would you like?(1-4)")
  if size in("large" "Large"):
    pizza= 6 
  elif size in("extralarge""extra large""Extralarge""extraLarge""ExtraLarge""Extra Large""Extra large""extra large""extra-large""Extra-Large""Extra-large""extra-Large"):
    pizza= 10
  else:
    print("Error")
    print("the size you wrote was not an option. Please choose'Large''Extra large'")
    break
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
  print("Pizza:",pizza)
  print("toppings:",toppings)
  Subtotal=pizza+toppings
  print("Subtotal:", Subtotal)
  Tax= Subtotal*0.13
  print("Tax:",Tax)
  Total= Tax+Subtotal
  print("Total:",Total)
  break