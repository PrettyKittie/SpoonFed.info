0)  This write-up is intended to be a general explanation of what constitutes a strong password.
  Bare with me, for now!  As it turns out, this quickly because a very complicated topic.  This page will get completed once I put together a clean, and meaningful, explanation for all the recommendations included.

1)  Configure Root
    A)  Set a strong password using the command:
        <pre> passwd <pass> </pre>
        
        I strongly recommend a password length of 15+ characters.
        Avoid words that are in the dictionary
        Include a mix of lower-case letters, capital letters, special characters, and numbers.
        Pass phrases are ok (sentences or strings of unrealated words), as long as you follow the previous rules!  There are tools that utilize dictionary words (and permutations thereof) to bruteforce, the same way that other tools use characters.



                        <pre> root@haxbox ~ $ passwd
                              Changing password for root.
                              (current) UNIX password: 
                              Enter new UNIX password: 
                              Retype new UNIX password: 
                              passwd: password updated successfully
                              root@haxbox ~ $ 
                        </pre>
