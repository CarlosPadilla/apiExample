API Example
===============================


Here's a quick summary of the structure
```
	booking/app/
		models		   # Structs and validation.
			user.go

		controllers
			init.go    # Register all of the interceptors.
			gorp.go    # A plugin for setting up Gorp, creating tables, and managing transactions.
			app.go     # "Login" and "Register new user" pages
```
