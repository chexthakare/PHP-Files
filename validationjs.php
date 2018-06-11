<!DOCTYPE html>
<html>
   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.2/underscore-min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/validate.js/0.7.1/validate.js"></script>
   <style type="text/css">
      .help-block.error {
      margin-bottom: 5px;
      }
   </style>
   <body>
      <div class="container">
         <h3></h3>
         <form id="main" class="form-horizontal" action="/example" method="post" novalidate>
            <div class="form-group">
               <label class="col-sm-2 control-label" for="fname">First Name</label>
               <div class="col-sm-5">
                  <input id="fname" class="form-control" type="text" placeholder="First Name" name="name">
               </div>
               <div class="col-sm-5 messages">
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 control-label" for="lname">Last Name</label>
               <div class="col-sm-5">
                  <input id="lname" class="form-control" type="text" placeholder="Last Name" name="lname">
               </div>
               <div class="col-sm-5 messages">
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 control-label" for="gender">Gender</label>
                 <div class="col-sm-5">
                    <div class="radio">
                      <label><input type="radio" name="gender" checked="checked">Male</label>
                      <label><input type="radio" name="gender">Female</label>
                    </div>
                  </div>
               <div class="col-sm-5 messages">
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 control-label" for="email">Email</label>
               <div class="col-sm-5">
                  <input id="email" class="form-control" type="email" placeholder="Email" name="email">
               </div>
               <div class="col-sm-5 messages"></div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 control-label" for="password">Password</label>
               <div class="col-sm-5">
                  <input id="password" class="form-control" type="password" placeholder="Password" name="password">
               </div>
               <div class="col-sm-5 messages"></div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 control-label" for="confirm-password">Confirm password</label>
               <div class="col-sm-5">
                  <input id="confirm-password" class="form-control" type="password" placeholder="Confirm password" name="confirm-password">
               </div>
               <div class="col-sm-5 messages"></div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 control-label" for="username">Username</label>
               <div class="col-sm-5">
                  <input id="username" class="form-control" type="text" placeholder="Username" name="username">
               </div>
               <div class="col-sm-5 messages">
               </div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 control-label" for="birthdate">Birthdate</label>
               <div class="col-sm-5">
                  <input id="birthdate" class="form-control" type="date" placeholder="YYYY-MM-DD" name="birthdate">
               </div>
               <div class="col-sm-5 messages"></div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 control-label" for="country">Country</label>
               <div class="col-sm-5">
                  <select id="country" class="form-control" name="country">
                     <option value="">Select</option>
                     <option value="CA">Canada</option>
                     <option value="SE">Sweden</option>
                     <option value="US">United States</option>
                  </select>
               </div>
               <div class="col-sm-5 messages"></div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 control-label" for="zip">ZIP Code</label>
               <div class="col-sm-5">
                  <input id="zip" class="form-control" type="text" placeholder="12345" name="zip">
               </div>
               <div class="col-sm-5 messages"></div>
            </div>
            <div class="form-group">
               <label class="col-sm-2 control-label" for="number-of-children">Number of children</label>
               <div class="col-sm-5">
                  <input id="number-of-children" class="form-control" type="number" placeholder="Number of children" name="number-of-children">
               </div>
               <div class="col-sm-5 messages"></div>
            </div>
            <div class="form-group">
               <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default">Submit</button>
               </div>
            </div>
         </form>
      </div>
      <script type="text/javascript">
         (function() {
          // These are the constraints used to validate the form
          var constraints = {
            name: {
              // You need to pick a username too
              presence: true,
              // And it must be between 3 and 20 characters long
              length: {
                minimum: 3,
                maximum: 20
              },
              format: {
                // We don't allow anything that a-z and 0-9
                pattern: "[a-z0-9]+",
                // but we don't care if the username is uppercase or lowercase
                flags: "i",
                message: "can only contain a-z and 0-9"
              }
            },
             lname: {
              // You need to pick a username too
              presence: true,
              // And it must be between 3 and 20 characters long
              length: {
                minimum: 3,
                maximum: 20
              },
              format: {
                // We don't allow anything that a-z and 0-9
                pattern: "[a-z0-9]+",
                // but we don't care if the username is uppercase or lowercase
                flags: "i",
                message: "can only contain a-z and 0-9"
              }
            },
            email: {
              // Email is required
              presence: true,
              // and must be an email (duh)
              email: true
            },
            password: {
              // Password is also required
              presence: true,
              // And must be at least 5 characters long
              length: {
                minimum: 5
              }
            },
            "confirm-password": {
              // You need to confirm your password
              presence: true,
              // and it needs to be equal to the other password
              equality: "password"
            },
            username: {
              // You need to pick a username too
              presence: true,
              // And it must be between 3 and 20 characters long
              length: {
                minimum: 3,
                maximum: 20
              },
              format: {
                // We don't allow anything that a-z and 0-9
                pattern: "[a-z0-9]+",
                // but we don't care if the username is uppercase or lowercase
                flags: "i",
                message: "can only contain a-z and 0-9"
              }
            },
            birthdate: {
              // The user needs to give a birthday
              presence: true,
              // and must be born at least 18 years ago
              date: {
                latest: moment().subtract(18, "years"),
                message: "^You must be at least 18 years old to use this service"
              }
            },
            country: {
              // You also need to input where you live
              presence: true,
              // And we restrict the countries supported to Sweden
              inclusion: {
                within: ["SE"],
                // The ^ prevents the field name from being prepended to the error
                message: "^Sorry, this service is for Sweden only"
              }
            },
            zip: {
              // Zip is optional but if specified it must be a 5 digit long number
              format: {
                pattern: "\\d{5}"
              }
            },
            "number-of-children": {
              // You don't have to input the number of children but it you do
              // you need to input an integer > 0
              numericality: {
                onlyInteger: true,
                greaterThanOrEqualTo: 0
              }
            }
          };
         
          // Hook up the form so we can prevent it from being posted
          document.querySelector("form#main")
            .addEventListener("submit", function(ev) {
              ev.preventDefault();
              handleFormSubmit(this);
            });
         
          function handleFormSubmit(form) {
            // First we gather the values from the form
            var values = validate.collectFormValues(form);
            // then we validate them against the constraints
            var errors = validate(values, constraints);
            // then we update the form to reflect the results
            showErrors(form, errors || {});
            // And if all constraints pass we let the user know
            if (!errors) {
              showSuccess();
            }
          }
         
          // Updates the inputs with the validation errors
          function showErrors(form, errors) {
            // We loop through all the inputs and show the errors for that input
            _.each(form.querySelectorAll("input[name], select[name]"), function(input) {
              // Since the errors can be null if no errors were found we need to handle
              // that
              showErrorsForInput(input, errors && errors[input.name]);
            });
          }
         
          // Shows the errors for a specific input
          function showErrorsForInput(input, errors) {
            // This is the root of the input
            var formGroup = closestParent(input.parentNode, "form-group")
              // Find where the error messages will be insert into
              , messages = formGroup.querySelector(".messages");
            // First we remove any old messages and resets the classes
            resetFormGroup(formGroup);
            // If we have errors
            if (errors) {
              // we first mark the group has having errors
              formGroup.classList.add("has-error");
              // then we append all the errors
              _.each(errors, function(error) {
                addError(messages, error);
              });
            } else {
              // otherwise we simply mark it as success
              formGroup.classList.add("has-success");
            }
          }
         
          // Recusively finds the closest parent that has the specified class
          function closestParent(child, className) {
            if (!child || child == document) {
              return null;
            }
            if (child.classList.contains(className)) {
              return child;
            } else {
              return closestParent(child.parentNode, className);
            }
          }
         
          function resetFormGroup(formGroup) {
            // Remove the success and error classes
            formGroup.classList.remove("has-error");
            formGroup.classList.remove("has-success");
            // and remove any old messages
            _.each(formGroup.querySelectorAll(".help-block.error"), function(el) {
              el.parentNode.removeChild(el);
            });
          }
         
          // Adds the specified error with the following markup
          // <p class="help-block error">[message]</p>
          function addError(messages, error) {
            var block = document.createElement("p");
            block.classList.add("help-block");
            block.classList.add("error");
            block.innerHTML = error;
            messages.appendChild(block);
          }
         
          function showSuccess() {
            // We made it \:D/
            alert("Success!");
          }
         })();
          
      </script>
   </body>
</html>