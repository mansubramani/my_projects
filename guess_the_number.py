import random

def num_to_guess():
    number = random.randint(1, 100)  # don't shadow 'random'
    attempts = 0
    while True:
        try:
            guess = int(input("Enter a guess: "))
            attempts += 1
            if guess < number:
                print("Too low, try again")
            elif guess > number:
                print("Too high, try again")
            else:
                print(f"Congrats! You took {attempts} attempts.")
                break
        except ValueError:
            print("Please enter a valid number.")
num_to_guess()