# rsa implement

import random



def gcd(a, b):
    while b != 0:
        a, b = b, a % b
    return a

def is_prime(num):
    if num == 2:
        return True
    if num < 2 or num % 2 == 0:
        return False
    for n in range(3, int(num**0.5)+2, 2):
        if num % n == 0:
            return False
    return True



def multiplicative_inv(e, phi):
    # d , x1,x2,y1, temp_phi= 0,1,1,phi
    e = e % phi
    i = 1
    while True:
    	if i*e % phi == 1:
    		return i
    	i += 1


def generate_keypair(p, q):
    if not (is_prime(p) and is_prime(q)):
        print("------------ not prime --------------")
    elif p == q:
        print("----------------- sholud not be equal--------------")
    
    n = p * q
    phi = (p-1) * (q-1)
    print("phi(n) : ",phi)
    e = random.randint(1, phi)
    # print("e is : ",e)
    g = gcd(e, phi)
    while g != 1:
        e = random.randint(1, phi)
        g = gcd(e, phi)
    # e = 85
    # d = modInverse(e, phi)
    d = multiplicative_inv(e, phi)
    # print("inverse ",d)
    return ((e, n), (d, n))




def encrypt(pk, plaintext):
    key, n = pk
    # print(f"Key are {key}")
    #Convert each letter in the plaintext to numbers based on the character using a^b mod m
    cipher = [((ord(char)-ord('a')) ** key) % n for char in plaintext]
    #Return the array of bytes
    return cipher

def decrypt(pk, ciphertext):
    #Unpack the key into its components
    key, n = pk
    plain = [chr(((char ** key) % n)+ord('a')) for char in ciphertext]
    # print(plain)
    return ''.join(plain)

print(" \t \t RSA encryption ")
    
p , q = map(int, input("Enter two prime number p and q :").split())

pri, pub = generate_keypair(p,q)


print(f"private key : {pri[0]} \npublic  key : {pub[0]}")

msg = input("Enter the msg in String :")

enc_msg = encrypt(pub,msg)

print("Encypted  message : ",''.join(map(lambda x: str(x), enc_msg)))

print("Decrypted message :",decrypt(pri,enc_msg))

