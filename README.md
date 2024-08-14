# NITA Edoc Porting Package

This package aims to facilitate the porting of functionalities from Edoc at NITA to PHP ecosystems at NITA. It provides a set of utility classes and methods to streamline the migration process.

## UgPass Class

The `UgPass` class is a key component of this package. It encapsulates the logic for handling user authentication and authorization within the NITA Edoc system. It provides methods for validating user credentials, generating access tokens, and managing user permissions.

### Example Usage

To use the `UgPass` class, first, make sure you have included the package in your PHP project. Then, you can create an instance of the `UgPass` class and call its methods as needed.

```php
// Instantiate the UgPass class
$ugPass = new UgPass();

// Get cordinates of last text block
$pdf_path = "";
$ugPass->getLastTextCoordinates($pdf_path);

```

## Calling `getLastTextCoordinates`

The `getLastTextCoordinates` function is a utility function provided by this package. It retrieves the coordinates of the last text entered in the NITA Edoc system. This can be useful for various purposes, such as tracking user input or analyzing document flow.

