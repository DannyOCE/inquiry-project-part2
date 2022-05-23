<!DOCTYPE html>
<!-- Assinging the DOC type -->
<html lang="en">

<head>
    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name="description" content="Node JS Quiz Questions">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Daniel P">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Linking the main header and footer css, along with the main quiz css. -->
    <link rel="icon" href="images/node_logo.webp">
    <title>Node JS Quiz</title>
    <link rel="stylesheet" href="styles/style.css">
    <link href="styles/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles/quiz.css">
</head>

<body>

    <?php
	    include_once "header.inc";
    ?>

    <!-- Form element to post form values to mercury server. -->
    <form method="post" action="attempts_add.php" class="quiz_form">

        <!-- Fieldset outline number 1 -->
        <fieldset>
            <legend>Quiz Introduction Questions</legend>

            <!-- Student ID text input -->
            <p>
                <label for="student_number">Student Number</label>
                <input type="text" name="student_number" id="student_number" required="required" pattern=".{7,10}" placeholder="Your student id..." />
                <!-- Input patterns and restrictions used to validate user input. -->
            </p>

            <br>

            <!-- First name text input -->
            <p>
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" required="required" size="40" maxlength="30" pattern="[a-zA-Z]+" placeholder="Your first name(s)..." />
                <!-- Input patterns and restrictions used to validate user input. -->
            </p>

            <br>

            <!-- Last name text input -->
            <p>
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name" required="required" size="40" maxlength="30" pattern="[a-zA-Z]+" placeholder="Your last name(s)..." />
                <!-- Input patterns and restrictions used to validate user input. -->
            </p>

            <br>

            <!-- Fieldset outline number 2 -->
            <fieldset>
                <legend>Main Quiz Questions</legend>

                <!-- Framework Question, Input type: text -->
                <p>
                    <label for="question_framework">1. What programming language does Node.JS use as a framework?</label>
                    <input type="text" name="question_framework" id="question_framework" required="required" size="30" maxlength="20" pattern="[a-zA-Z]+" placeholder="Language name..." />
                    <!-- Input patterns and restrictions used to validate user input. -->
                </p>

                <br>


                <p>
                    <label>2. What programming language is Node.JS written in?</label>
                </p>

                <br>

                <!-- Language Question, Input type: radio -->
                <p>
                    <input type="radio" value="C++" id="question_language_cpp" name="question_language" required/>
                    <!-- "required" attribute used to ensure selection.  -->
                    <label for="question_language_cpp">C++</label>

                    <br>

                    <input type="radio" value="C" id="question_language_c" name="question_language" />
                    <label for="question_language_c">C</label>

                    <br>

                    <input type="radio" value="Javascript" id="question_language_js" name="question_language" />
                    <label for="question_language_js">Javascript</label>

                    <br>

                    <input type="radio" value="All of the above" id="question_language_all" name="question_language" />
                    <label for="question_language_all">All of the above</label>
                </p>

                <br>

                <p>
                    <label>3. What is Node.JS <strong>not</strong> suitable for?</label>
                </p>

                <br>

                <!-- Suitable Question, Input type: Checkbox -->
                <p>
                    <input type="checkbox" value="Writing server-side applications" name="question_suitable" id="question_suitable_server_side" checked />
                    <!-- First checkbox "checked" attribute to ensure user selection. -->
                    <label for="question_suitable_server_side">Writing server-side applications</label>

                    <br>

                    <input type="checkbox" value="CPU intensive tasks" name="question_suitable" id="question_suitable_cpu_intensive" />
                    <label for="question_suitable_cpu_intensive">CPU intensive tasks</label>

                    <br>

                    <input type="checkbox" value="Multi-threaded applications" name="question_suitable" id="question_suitable_threaded" />
                    <label for="question_suitable_threaded">Multi-threaded applications</label>

                    <br>

                    <input type="checkbox" value="Real time communication" name="question_suitable" id="question_suitable_realtime" />
                    <label for="question_suitable_realtime">Real time communication</label>

                </p>

                <br>

                <p>
                    <label for="question_package">4. Which package is used in Node.JS to take advantage of multi-core systems?</label>
                </p>

                <br>

                <!-- Package Question, Input type: Select -->
                <p>
                    <select name="question_package" id="question_package" required="required">
                         <!-- "required" attribute used to ensure selection.  -->
                        <option value="">Please Select</option>
                        <option value="Domain">Domain</option>
                        <option value="Stream">Stream</option>
                        <option value="Cluster">Cluster</option>
                        <option value="Process">Process</option>
                    </select>
                </p>

                <br>

                <!-- Years Question, Input type: Number -->
                <p>
                    <label for="question_years">5. How many years ago was Node.JS developed?</label>
                    <input type="number" value="1" max="100" min="1" name="question_years" id="question_years" />
                    <!-- Input restrictions used to validate user input. "max" & "min" -->

                </p>


            </fieldset>

        </fieldset>

        <br>

        <!-- Submit Button, Type Submit, Used for submitting form values to server. -->
        <button type="submit" id="quiz_submit">Submit Form</button>


    </form>

    <!-- Footer HTML -->
    <?php
	    include_once "main_footer.inc";
    ?>

</body>
</html>