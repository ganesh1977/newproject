from enum import Enum, auto

class DiscountType(Enum):
    STANDARD = auto()
    SEASONAL = auto()
    WEIGHT   = auto()

def get_discounted_price(cart_weight, total_price, discount_type):
    discount = str(discount_type)
    ##print(discount)
    ffff = discount.split(".")
    type = ffff[1]
    match type:
        case "STANDARD":
                return 
        case "SEASONAL":
              return "aaaaa"
        case "WEIGHT":
              return (total_price*10) / 100


print(get_discounted_price(12, 100, DiscountType.WEIGHT))
