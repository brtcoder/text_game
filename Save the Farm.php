Save the Farm!

Hello there. It’s been a harrowing few weeks. First your toenail issue, and now Great-Aunt Natasha’s emu farm is in danger of being repossessed! 
So here you are—after a brief stopover at the Mayo Clinic—in Uncle Boris’s remote cabin in the heart of the Terror Woods. 
Family legend holds that a golden statue of immense value is hidden somewhere within these walls…

Welcome to the world of interactive fiction. In this project, you’ll be building a text adventure game called Save the Farm!

You’ll be practicing everything you’ve learned about booleans, conditionals, and logical operators to create a fun, silly game. 
You can customize the game to your taste. Once you’ve completed this project, you’ll understand the mechanics of building an interactive text game, 
so, from there, the world is your oyster (as Uncle Boris always used to say).

Take your time and have fun!
Walk Through the Codebase:
1.

Learning how to read code is as important as learning to write code. To start this project, we’ll practice our code reading skills by walking through the existing code base (collection of existing code) for the game. You’ll use the skills you’ve been developing so far to understand the provided code. From there, you’ll be able to grow the program into something really powerful and fun!

We’ve provided a lot of the structure and basic functionality for the game. The game program is located in the index.php file.

The game isn’t very interesting yet (those are the parts you’ll be writing), but let’s run it to see what we have so far.

2.

At the start of the index.php file, we declare several global variables we’ll need throughout the game. Next we include in all of the helpful functions we’ll need to make the game work.

Read through the directions that have been printed to the terminal. The list of commands is printed when the getHelp() function is invoked.

You can see where the other parts are being printed with echo statements in index.php file. Next, we invoke the gameRound() function 25 times—once for each round of the game.

Notice, that the terminal is awaiting user input.

3.

Run through several commands in the terminal.

You can type any of the valid commands put on glasses, take off glasses, put on contacts, take off contacts, eat, cook, pee, pick mushrooms, move cupboard, look around, search safe, go, or you can type an invalid command.

Right now, only help and an invalid command should work as expected. The others should just use up a round. You’ll be writing the functions to make each of these commands meaningful.

You can run through 25 commands to end the program or press controlc in the terminal to quit the program.

4.

Now that we’ve seen how the program works broadly, let’s look at the details of the gameRound() function—this is where the real action happens.

Navigate to the file gameRound.php in your code editor.

Scan through the gameRound() function on your own. In the next task, we’ll walk through it together.

5.

Let’s walk through the function together:

    First we declare all the global variables we’ll need to have access to within the function.
    Next, we check how many rounds the player has left. Winning or losing the game eliminates all remaining rounds. So, even though we invoke the gameRound() function 25 times, we might not want it to do something every time it’s run. In those situations, we’ll simply return from the function.
    We invoke the printStatus() function. You’ll be writing this function. Right now, it doesn’t do anything.
    We prompt the user with readline() and save their response as $cmd.
    We provide a large switch statement with many cases to handle the different commands a user may have entered. We’ll look over this in even more detail in the next step.
    We use up a round by decreasing the global $rounds_left variable.
    We end the function by printing a message to let the user know how many rounds they have left.

6.

Let’s break down the switch statement in more detail:

    If the user types help, the printHelp() function runs. This function is located in printHelp.php.
    The next several cases are similar to each other. For the commands put on glasses, put on contacts, take off contacts, and take off glasses the corresponding global variable is changed and a message is printed to the player confirming their action.
    For the next 8 cases, you’ll be writing the functions that make them work:
        If the command is go, the changeLocation() function, is run.
        If the command is look around, the lookAround() function, is run.
        If the command is pee, the pee() function, is run.
        If the command is pick mushrooms, the pickMushrooms() function, is run.
        If the command is cook, the cookSoup() function, is run.
        If the command is eat, the eatSoup() function, is run.
        If the command is move cupboard, the moveCupboard() function, is run.
        If the command is search safe, the searchSafe() function, is run.
    We added a little easter egg: if the player is in the bathroom and enters search toilet they lose the game in a silly way.
    Finally, there’s a default to catch any unrecognized commands.

As you can see, there’s a lot of code for you to write. Let’s get started!

**************************************************************************
	Write the printStatus() function:
**************************************************************************
7.

The first thing we need to do is write a printStatus() function. This function will print the player’s current state so that they can make an informed decision about what to do next.

Navigate to the printStatus.php file. We’ve declared the global variables and added the first line of the function, which prints the player’s current location. But they need more information.

8.

If the player is wearing contacts, you should print "You are wearing contacts.\n".

If the player is wearing glasses, you should print "You are wearing glasses.\n".

It may be silly, but there’s nothing to stop someone from wearing contacts and glasses, so we don’t do that in our game.

9.

Let’s do a few more:

    If the player has mushrooms, you should print "You are holding mushrooms.\n".

    If the player has soup, you should print "You are holding a scalding-hot bowl of mushroom soup.\n".

    If the player needs to pee, you should print "You need to pee!\n".

10.

If the player is hungry, you should print "You are hungry.\n". Otherwise, you should print "You are well-fed and energetic.\n".

11.

Test your function! Enter php index.php in the terminal again. Now you should see the player status print at the start of each round. Do some actions that should change their status (put on glasses, put on contacts, take off contacts, and take off glasses) and make sure everything is working as expected.

**************************************************************************
	Write the changeLocation() function:
**************************************************************************
12.

Our player starts out in the kitchen, but the game has multiple locations. From the kitchen, a player can enter the bathroom or go out to the woods. From each of those locations, they can get back to the kitchen.

It’s time to write the changeLocation() function which will run when the player types go.

Navigate to the changeLocation.php file. For this function, you’ll need access to the global $location variable, so declare that at the start of the function body.

13.

After a player types go we still need to know where they want to go. We’ll need to prompt them with the readline() function.

First you should print "Where do you want to go?\n". Next, you should invoke readline() passing in ">> " as the prompt string. We like using > or >> to prompt the player because it makes it clear where they’re expected to type.

Save the player’s response as a variable.

You might want to convert their response to lower-case to be more flexible. You can do this too with the built-in strtolower() function.

14.

You’ll need to write several if/elseif conditions to handle the possible scenarios:

    If their current location is kitchen and their command was to go to the bathroom, you should print You go to: bathroom.\n, and you should change their current location to "bathroom".

    If their current location is kitchen and their command was to go to the woods, you should print You follow the winding path, shivering as you make your way deep into the Terror Woods., and and you should change their current location to "woods".

    If their current location is bathroom and their command was to go to the kitchen, you should print You go to: kitchen.\n, and you should change their current location to "kitchen".

    If their current location is woods and their command was to go to the kitchen, you should print You go to: kitchen.\n, and you should change their current location to "kitchen".

    Otherwise, if their command was to go to the woods or their command was to go to the kitchen or their command was to go to the bathroom, you should print You can't go directly to there from your current location. Try going somewhere else first.\n.

    And finally, you should handle the situation where they didn’t enter a valid command, so you should print That doesn't make sense. Are you confused? Try 'look around'.\n.

15.

Test your function! Enter php index.php in the terminal again. Since you wrote the printStatus() function, you can see the player status print at the start of each round.

Use the go command to test each of the actions you wrote within the changeLocation() function. Make sure everything is working as expected.

When you type an invalid command, we tell the player to look around… but the lookAround() function isn’t actually written yet… let’s get on that!

**************************************************************************
	Write the lookAround() function
**************************************************************************

16.

In each location, the player should be provided a description of the location they’re currently in. The description will give them ideas of what they can and should do next.

It’s time to write the lookAround() function which will run when the player types look around.

Navigate to the lookAround.php file. For this function, you’ll need access to several global variables: $location, $wearing_glasses, $wearing_contacts, and $moved_cupboard, so declare these at the start of the function body.

17.

We allow the player to wear either glasses or contacts, neither, or both. They should only be able to see if they’re wearing either contacts or glasses but not both.

If the player is wearing either contacts or glasses but not both, we’ll provide a switch statement to print a description based on their current location. Otherwise, we should simply print "It's really hard to make out any details...\n".

18.

We’re going to write a switch statement based on the $location.

In the case that they’re in the kitchen, we want to hint that they can go to the bathroom or the woods, and also that they might want to figure out how to cook mushroom soup…

Print "This kitchen comes with all the tools and ingredients needed to cook mushroom soup--- except the mushrooms!\n\nFrom here, you see the door to the *bathroom* and the backdoor, which leads to the *woods*.\n\n".

The game is won by pushing aside the cupboard and searching the safe, so if they haven’t done this yet, we’ll want to hint them towards it: if they’ve already moved the cupboard, print "The cupboard has been moved aside, and reveals a safe built into the wall.\n". Otherwise, print "Also, there's a conspicuously large cupboard against a peculiarly worn piece of the wall.\n".

19.

In the case that they’re in the bathroom, print "Normal bathroom. There's a mirror here. You can get back out to the *kitchen*. You sense a magic presence in the toilet, but you decide to ignore it.\n".

We want to highlight that from the bathroom, they’re able to go to the kitchen. We also want to throw in a little hint towards the easter egg.

20.

In the case that they’re in the woods, print "These woods aren't actually that terrifying. Unless you're afraid of mushrooms. There are millions of them here!\nYou see the path leading back to your cabin's *kitchen*.\n".

We want to highlight that from the woods they’re able to go to the kitchen. We also want to alert them to all the mushrooms around…

21.

The player starts out hungry but needs to be well-fed before they can do the hard work of moving the cupboard aside. They can get full by going to the woods to pick mushrooms, cooking those mushrooms in the kitchen, and then eating the soup they make.

Let’s start with picking the mushrooms. When the player types the command pick mushrooms the pickMushrooms() function is invoked. Navigate to the pickMushrooms.php file.

Within the pickMushrooms() function, you’ll need access to the global variables $location and $has_mushrooms.

If the player’s current location is not the woods, print "There aren't any mushrooms to pick!\n".

Otherwise, print "You've picked some mushrooms.\n" and change the value of the $has_mushrooms variable to TRUE.

22.

When the player types the command cook the cookSoup() function is invoked. Navigate to the cookSoup.php file.

You’ll need access to the global variables $location, $has_mushrooms, and $has_soup.

If it’s not the case that the player’s current location is the kitchen and that they currently have mushrooms, print "You can't cook like this! You need something to cook AND to be in the kitchen.\n". Otherwise, you should print "You made some mushroom soup. Mushroom is the queen of all soups!\n" and change the value of $has_mushrooms to FALSE and the value of $has_soup to TRUE.

23.

Finally, the player needs to be able to eat their soup. When the player types the command, eat the eatSoup() function is invoked. Navigate to eatSoup.php.

You’ll need access to the global variables $has_soup and $is_hungry. If the player does not have soup, print "You don't have any cooked food to eat!\n". Otherwise, print "You have eaten the soup!\n" and assign both $has_soup and $is_hungry the value FALSE.

24.

The player won’t be able to move the cupboard and reveal the safe if they have to pee. When they enter the pee command. The pee() function is invoked. Navigate to the pee.php to write this function.

You’ll need access to the global variables $location and $needs_to_pee.

If the player’s current location is the bathroom or the player’s current location is the woods, you should print "You relieve yourself.\n" and change the value of $needs_to_pee to FALSE. Otherwise, you should print "Are you crazy? You can't pee here!\n".

25.

The game has been leading the player to move the cupboard. Navigate to the moveCupboard.php file so you can write the moveCupboard() function which will be invoked when the player enters the command move cupboard.

We’ve declared all the global variables you should need. You should declare a variable $ready_to_work to decide if the player is prepared to move the cupboard. $ready_to_work should be TRUE if the player is not hungry and they’re wearing contacts and they are not wearing glasses and they do not need to pee.

    If the player’s current location is not the kitchen, you should print "You don't see a cupboard here!\n".
    Otherwise, if the cupboard has already been moved, you should print "You've already moved the cupboard!\n".
    Otherwise, if $ready_to_work is not TRUE, you should print "You're not ready to work! You need to be properly fed, have an empty bladder, and have corrected vision (without dealing with those pesky glasses). Without these things, there's no point in even trying to move the cupboard.\n".
    Otherwise, you should print "You move the cupboard aside. You have revealed a safe crudely fit into the wall behind where the cupboard used to be.\n" and you should change the value of $moved_cupboard to TRUE.

26.

It’s almost over! Once the safe is revealed, the player can search safe and win the game! Navigate to the searchSafe.php file so that you can write the searchSafe() function.

You’ll need access to the global variables $location, $moved_cupboard, and $rounds_left.

If the player’s current location is not the kitchen or they have not yet moved the cupboard, you should print "You don't see any safe here!\n". Otherwise, you should print "You search through the safe (the passcode is \"1234\"). With bated breath, you pull out the contents! It's a chocolate Mickey Mouse, wrapped in gold foil. Delicious!\nYOU WIN THE GAME!!!!\n\n" and you should change the value of $rounds_left to 1.

**************************************************************************
	Play and Customize Your Game:
**************************************************************************

27.

Awesome work! You’ve created a real text adventure game. Time to play-test the game and make sure everything is working. Enter php index.php in the terminal and play through the game.

28.

You did amazing! Give yourself a pat on the back. If you’re feeling inspired, you should see the game so far as a jumping off point. You can customize the game to your tastes. You can add even more actions for the player to take.

And once you’ve exhausted this game, try to make a new interactive fiction game from scratch. Your imagination is the limit! We’d love to see what you build, so definitely share any games you make with us!















































































