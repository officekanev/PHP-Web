<?php
    include 'Student.php';
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head lang="en">
    <meta charset="UTF-8">
    <title>studentsorting</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
    <script src="../jquery-3.1.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <form method="GET">
             <table class="table-bordered">
                 <thead>
                    <tr>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Email</th>
                        <th>Exam score</th>
                    </tr>
                 </thead>
                 <tbody id="tbody">
                    <input type="hidden" name="count" value="3">
                    <script>
                        $(document).ready(function () {
                            for(let i = 0; i < $('#count').val(); i++){
                                newRow = '<tr>
                                    <td>
                                    <input type="text" name="first-name-1" placeholder="First name">
                                    </td>
                                    <td>
                                    <input type="text" name="last-name-1" placeholder="Last name">
                                    </td>
                                    <td>
                                    <input type="text" name="email-1" placeholder="FEmail">
                                    </td>
                                    <td>
                                    <input type="number" name="exam-score-1" placeholder="Exam score">
                                    </td>
                                    </tr>';

                                $('#tbody').prepend(newRow);
                            }
                        });
                    </script>
<!--                    <tr>-->
<!--                        <td>-->
<!--                            <input type="text" name="first-name-1" placeholder="First name">-->
<!--                        </td>-->
<!--                        <td>-->
<!--                            <input type="text" name="last-name-1" placeholder="Last name">-->
<!--                        </td>-->
<!--                        <td>-->
<!--                            <input type="text" name="email-1" placeholder="FEmail">-->
<!--                        </td>-->
<!--                        <td>-->
<!--                            <input type="number" name="exam-score-1" placeholder="Exam score">-->
<!--                        </td>-->
<!--                    </tr>-->
<!---->
<!--                    <tr>-->
<!--                        <td>-->
<!--                            <input type="text" name="first-name-2" placeholder="First name">-->
<!--                        </td>-->
<!--                        <td>-->
<!--                            <input type="text" name="last-name-2" placeholder="Last name">-->
<!--                        </td>-->
<!--                        <td>-->
<!--                            <input type="text" name="email-2" placeholder="FEmail">-->
<!--                        </td>-->
<!--                        <td>-->
<!--                            <input type="number" name="exam-score-2" placeholder="Exam score">-->
<!--                        </td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>-->
<!--                            <input type="text" name="first-name-3" placeholder="First name">-->
<!--                        </td>-->
<!--                        <td>-->
<!--                            <input type="text" name="last-name-3" placeholder="Last name">-->
<!--                        </td>-->
<!--                        <td>-->
<!--                            <input type="text" name="email-3" placeholder="FEmail">-->
<!--                        </td>-->
<!--                        <td>-->
<!--                            <input type="number" name="exam-score-3" placeholder="Exam score">-->
<!--                        </td>-->
<!--                    </tr>-->
                 <tr>
                     <td colspan="2">
                         <span><button class="btn btn-primary" id="add" type="button">+</button></span>
                         Sort by:
                         <select name="sort" id="">
                             <option value="first-name">First name</option>
                             <option value="last-name">Last name</option>
                             <option value="email">Email</option>
                             <option value="exam--score">Exam score</option>
                         </select>
                     </td>
                     <td colspan="2">
                         Order:
                         <select name="order" id="">
                             <option value="desc">Descending</option>
                             <option value="ase">Ascending</option>

                         </select>
                         <button class="btn btn-primary">Submit</button>
                     </td>


                 </tr>
                 </tbody>
             </table>
            </form>
        </div>
    </div>

    <?php
        if(isset($_GET['first-name-1'])){
            $students = [];
            //Student 1
            $student_1_first_name = $_GET['first-name-1'];
            $student_1_last_name = $_GET['last-name-1'];
            $student_1_email = $_GET['email-1'];
            $student_1_exam_score = intval($_GET['exam-score-1']);
            $student_1 = new Student($student_1_first_name, $student_1_last_name,
                $student_1_email, $student_1_exam_score);

            $students[] = $student_1;

            //Student 2
            $student_2_first_name = $_GET['first-name-2'];
            $student_2_last_name = $_GET['last-name-2'];
            $student_2_email = $_GET['email-2'];
            $student_2_exam_score = intval($_GET['exam-score-2']);
            $student_2 = new Student($student_2_first_name, $student_2_last_name,
                $student_2_email, $student_2_exam_score);

            $students[] = $student_2;

            //Student 3
            $student_3_first_name = $_GET['first-name-3'];
            $student_3_last_name = $_GET['last-name-3'];
            $student_3_email = $_GET['email-3'];
            $student_3_exam_score = intval($_GET['exam-score-3']);
            $student_3 = new Student($student_3_first_name, $student_3_last_name,
                $student_3_email, $student_3_exam_score);

            $students[] = $student_3;

            //Sort
            $sort = $_GET['sort'];
            if($sort == 'first-name'){
                function sortByFirstName($a, $b){
                    return strcmp($a->getFirstName(), $b->getFirstName());
                }
                usort($students, "sortByFirstName");
            }elseif($sort == 'last-name'){
                function sortByLastName($a, $b){
                    return strcmp($a->getLastName(), $b->getLastName());
                }
                usort($students, "sortByLastName");
            }elseif($sort == 'email'){
                function sortByEmail($a, $b){
                    return strcmp($a->getEmail(), $b->getEmail());
                }
                usort($students, "sortByEmail");
            }elseif($sort == 'exam-score'){
                function sortByExamScore($a, $b){
                    return strcmp($a->getExamScore(), $b->getExamScore());
                }
                usort($students, "sortByExamScore");
            }
            //Order
            $order = $_GET['order'];

            if($order == 'desc'){
                $students = array_reverse($students);
            }

            ?>

            <table class="table-bordered">
                <thead>
                    <tr>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Email</th>
                        <th>Exam score</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $averageScore = 0;
                    foreach ($students as $student) { ?>
                        <tr>
                            <td><?=$student->getFirstname();?></td>
                            <td><?=$student->getLastName();?></td>
                            <td><?=$student->getEmail();?></td>
                            <td><?=$student->getExamScore();?></td>
                        </tr>
                 <?php  $averageScore += $student->getExamscore();
                        }

                    ?>
                        <tr>
                            <td align="center" colspan="4"><?= round($averageScore / 3, 2);?></td>
                        </tr>
                </tbody>
            </table>

       <?php }
            ?>

    <script>
        $(document).ready(function () {
            $('#add').click(function () {

                newRow = '<tr>
                    <td>
                    <input type="text" name="first-name-1" placeholder="First name">
                    </td>
                    <td>
                    <input type="text" name="last-name-1" placeholder="Last name">
                    </td>
                    <td>
                    <input type="text" name="email-1" placeholder="FEmail">
                    </td>
                    <td>
                    <input type="number" name="exam-score-1" placeholder="Exam score">
                    </td>
                    </tr>';

                    $('#tbody').prepend(newRow);
            });
        });
    </script>

</body>
</html>