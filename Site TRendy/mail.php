<?php

                                        if(isset($_POST['btn-modal']))
                                        {
                                            $phone = $_POST['phone'];
                                            $email = $_POST['email'];
                                            $comment = $_POST['comment'];
                                            $error =[];
                                            $time = date("Y-m-d H:i:s");
                                            if(strlen($phone)==0||strlen($email)==0||strlen($comment)==0)
                                            {
                                                $error='<script>alert("Заполните все поля")</script>';
                                            }
                                            if(empty($error)){
                                           
                                                ?> <script>alert("Заявка Успешно Отправлена ")</script><?php
                                                mail('sales@trendyrus.ru','Завяка с Сайта',
                                                
                                                'Phone - '.$phone.'
Email - '.$email.'
Comment -  '.$comment.'
'.$time.''
                                                
                                                );
                                            }
                                            
                                        }
?>