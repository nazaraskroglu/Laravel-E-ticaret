def islem(islem_adi):
    def toplam(*args):
        toplam=0
        for i in args:
            toplam+=i
        return toplam

    def carpma(*args):
        carpim=1
        for i in args:
            carpim*=i
        return carpma

    if islem_adi == "toplama":
        return toplam
    else:
        return carpma

islem2=islem("carpma")
print(islem2(7,567,453))
