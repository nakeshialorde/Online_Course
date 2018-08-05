
        //a panel width in pixels
        var panelWidth = 610;

        var score = 0;

        function rightAnswer() {
            $('.panel-stuff').hide();
            $('.confirm').hide();
            $('.right-answer').show();
            $('.next').show();
            score++;
        }

        function wrongAnswer() {
            $('.panel-stuff').hide();
            $('.confirm').hide();
            $('.wrong-answer').show();
            $('.next').show();
        }

        function partialAnswer() {
            $('.panel-stuff').hide();
            $('.confirm').hide();
            $('.partial-answer').show();
            $('.next').show();
        }

        function greatScore(){
            $('.panel-question').append('<h3>Congrats! Perfect score!</h3>');
        }

        function goodScore() {
            $('.panel-question').append('<h3>Not bad! You know your stuff.</h3>');
        }

        function badScore() {
            $('.panel-question').append('<h4>Sorry, this is not a passing score.</h4>');
        }

        //DOM and all content is loaded
        $('html').addClass('js');
        $(window).ready(function() {
            $('.fb').hide();
            $('.next').hide();

            var $panels = $(".panel").hide(),
                panCount = 0;

            $panels.eq(panCount).show();

        // show next panel
        $('.slideshow-next').click(function () {
          $panels.eq(panCount).hide();
          panCount = (panCount+1) % $panels.length;
            var curQues = $panels.eq(panCount);
            curQues.show();
            var quesType = curQues.attr('class').split(' ')[1];
            console.log(quesType);
            switch (quesType) {

                case 'select-one':
                  $(curQues).find('.viewer-answer-one').mouseup(function () {
                    $(this).addClass('highlight').siblings().removeClass('highlight');
                  });
                  $(curQues).find('.confirm').on('click', function () {
                    var isCorrect = $('.correct').hasClass('highlight');
                    if (isCorrect == true) {
                    rightAnswer();
                    } else {
                    wrongAnswer();
                    }
                  });
                    break;  //works

                case 'select-multiple':
                  $(curQues).find('.answer-multiple').mouseup(function () {
                    $(this).toggleClass('highlight-multiple');
                  });
                  var rightAns = $(curQues).find('.answer-multiple.correct').length;

                  $(curQues).find('.confirm').on('click', function () {
                    var selectedRightAns = $(curQues).find('.answer-multiple.correct.highlight-multiple').length;
                      console.log('C');
                    if (rightAns == selectedRightAns) {
                    rightAnswer();
                    } else if (selectedRightAns == 0) {
                    wrongAnswer();
                    } else {
                    partialAnswer();
                    }
                  });
                    break;  //works

                case 'fill-blanks-order':
                    $(curQues).find('.confirm').on('click', function () {
                    var rightAns1 = "MERCURY";
                    var rightAns2 = "VENUS";
                    var rightAns3 = "EARTH";
                    var isCorrect1 = $('.fill-val1').val().toUpperCase();
                    var isCorrect2 = $('.fill-val2').val().toUpperCase();
                    var isCorrect3 = $('.fill-val3').val().toUpperCase();
                    if (isCorrect1 == rightAns1 && isCorrect2 == rightAns2 && isCorrect3 == rightAns3) {
                    rightAnswer();
                    } else if ((isCorrect1 == rightAns1) || (isCorrect2 == rightAns2) || (isCorrect3 == rightAns3)) {
                    partialAnswer();
                    } else {
                    wrongAnswer();
                    }
                  });
                    break;   //works

                  case 'fill-blanks-random':
                    $(curQues).find('.confirm').on('click', function () {
                    var rightAns1 = "GREENLAND";
                    var rightAns2 = "CANADA";
                    var rightAns3 = "RUSSIA";
                    var isCorrect1 = $('.fill-val-ran1').val().toUpperCase();
                    var isCorrect2 = $('.fill-val-ran2').val().toUpperCase();
                    var isCorrect3 = $('.fill-val-ran3').val().toUpperCase();

                    if (((isCorrect1 == rightAns1) || (isCorrect1 == rightAns2) || (isCorrect1 == rightAns3)) && 
                        ((isCorrect2 == rightAns1) || (isCorrect2 == rightAns2) || (isCorrect2 == rightAns3)) && (isCorrect2 !== isCorrect1) &&
                         ((isCorrect3 == rightAns1) || (isCorrect3 == rightAns2) || (isCorrect3 == rightAns3)) && (isCorrect3 !== isCorrect1) &&
                          (isCorrect3 !== isCorrect2)) {
                    rightAnswer();
                    } else if (((isCorrect1 == rightAns1) || (isCorrect1 == rightAns2) || (isCorrect1 == rightAns3)) || 
                               ((isCorrect2 == rightAns1) || (isCorrect2 == rightAns2) || (isCorrect2 == rightAns3)) ||
                                ((isCorrect3 == rightAns1) || (isCorrect3 == rightAns2) || (isCorrect3 == rightAns3))) {
                    partialAnswer();
                    } else {
                    wrongAnswer();
                    }
                  });
                    break;   //works

                case 'short-answer':
                    $(curQues).find('.confirm').on('click', function () {
                    var rightAns = "JUPITER";
                    var isCorrect = $('.short-val').val().toUpperCase();
                    if (isCorrect == rightAns) {
                    rightAnswer();
                    } else {
                    wrongAnswer();
                    }
                  });
                    break;   //works

                case 'long-answer':
                    $(curQues).find('.confirm').on('click', function () {
                    var rightAns = "Jupiter";
                    var isCorrect = $('.short-val').val();
                    if (isCorrect == rightAns) {
                    rightAnswer();
                    } else {
                    wrongAnswer();
                    }
                  });
                    break;   // has nothing - needs function to send to teacher

                case 'table':
                    $(curQues).find('.confirm').on('click', function () {
                    var rightAns1 = "14";
                    var rightAns2 = "5";
                    var rightAns3 = "6";
                    var isCorrect1 = $('.fill-val-tab1').val();
                    var isCorrect2 = $('.fill-val-tab2').val();
                    var isCorrect3 = $('.fill-val-tab3').val();
                    if (isCorrect1 == rightAns1 && isCorrect2 == rightAns2 && isCorrect3 == rightAns3) {
                    rightAnswer();
                    } else if ((isCorrect1 == rightAns1) || (isCorrect2 == rightAns2) || (isCorrect3 == rightAns3)) {
                    partialAnswer();
                    } else {
                    wrongAnswer();
                    }
                  });
                    break;   //works

                case 'label-images':
                    $(curQues).find('.confirm').on('click', function () {
                    var rightAns1 = "AFRICA";
                    var rightAns2 = "ASIA";
                    var rightAns3 = "EUROPE";
                    var isCorrect1 = $('.fill-val-label1').val().toUpperCase();
                    var isCorrect2 = $('.fill-val-label2').val().toUpperCase();
                    var isCorrect3 = $('.fill-val-label3').val().toUpperCase();
                    if (isCorrect1 == rightAns1 && isCorrect2 == rightAns2 && isCorrect3 == rightAns3) {
                    rightAnswer();
                    } else if ((isCorrect1 == rightAns1) || (isCorrect2 == rightAns2) || (isCorrect3 == rightAns3)) {
                    partialAnswer();
                    } else {
                    wrongAnswer();
                    }
                  });
                    break;   //works

                

                case 'match-words':
                    $('.match-words-col2').sortable({ items: "> li",
                            connectWith: ".match-words-col2",
                            axis: 'y',
                            cancel: '',
                            opacity: 0.5,
                            tolerance: 'pointer',
                            containment: 'window'
                    });

                    $(curQues).find('.confirm').on('click', function () {
                        var staticUl = $('ul.match-words-col1');
                        var staticWord1 = staticUl.children().eq(0);
                        var staticWord2 = staticUl.children().eq(1);
                        var staticWord3 = staticUl.children().eq(2);

                        var fluidUl = $('ul.match-words-col2');
                        var fluidWord1 = fluidUl.children().eq(0);
                        var fluidWord2 = fluidUl.children().eq(1);
                        var fluidWord3 = fluidUl.children().eq(2);

                        if (((staticWord1 && fluidWord1).hasClass('word1')) && ((staticWord2 && fluidWord2).hasClass('word2'))
                            && ((staticWord3 && fluidWord3).hasClass('word3'))) {
                            rightAnswer();
                        } else if (((staticWord1 && fluidWord1).hasClass('word1')) || ((staticWord2 && fluidWord2).hasClass('word2'))
                            || ((staticWord3 && fluidWord3).hasClass('word3'))) {
                            partialAnswer();
                        } else {
                            wrongAnswer();
                        }
                    });
                    break;   //works

                case 'match-images':
                        $('.match-img-row2').sortable({ items: "> img",
                            connectWith: ".match-img-row2",
                            appendTo: ".match-img-row2",
                            helper: 'clone',
                            axis: 'x',
                            cancel: '',
                            opacity: 0.5,
                            tolerance: 'pointer',
                            containment: 'window'
                    });

                    $(curQues).find('.confirm').on('click', function () {
                        var staticDiv = $('div.match-img-row1');
                        var staticImg1 = staticDiv.children().eq(0);
                        var staticImg2 = staticDiv.children().eq(1);
                        var staticImg3 = staticDiv.children().eq(2);

                        var fluidDiv = $('div.match-img-row2');
                        var fluidImg1 = fluidDiv.children().eq(0);
                        var fluidImg2 = fluidDiv.children().eq(1);
                        var fluidImg3 = fluidDiv.children().eq(2);

                        if (((staticImg1 && fluidImg1).hasClass('img1')) && ((staticImg2 && fluidImg2).hasClass('img2'))
                            && ((staticImg3 && fluidImg3).hasClass('img3'))) {
                            rightAnswer();
                        } else if (((staticImg1 && fluidImg1).hasClass('img1')) || ((staticImg2 && fluidImg2).hasClass('img2'))
                            || ((staticImg3 && fluidImg3).hasClass('img3'))) {
                            partialAnswer();
                        } else {
                            wrongAnswer();
                        }
                    });
                    break;   //works

                case 'words-to-pictures':
                     $('.match-wordpic-row2').sortable({ items: "> p",
                            connectWith: ".match-wordpic-row2",
                            axis: 'x',
                            cancel: '',
                            opacity: 0.5,
                            tolerance: 'pointer',
                            containment: 'window'
                    });

                    $(curQues).find('.confirm').on('click', function () {
                        var staticDiv = $('div.match-wordpic-row1');
                        var staticImg1 = staticDiv.children().eq(0);
                        var staticImg2 = staticDiv.children().eq(1);
                        var staticImg3 = staticDiv.children().eq(2);

                        var fluidDiv = $('ul.match-wordpic-row2');
                        var fluidImg1 = fluidDiv.children().eq(0);
                        var fluidImg2 = fluidDiv.children().eq(1);
                        var fluidImg3 = fluidDiv.children().eq(2);

                        if (((staticImg1 && fluidImg1).hasClass('wordpic1')) && ((staticImg2 && fluidImg2).hasClass('wordpic2'))
                            && ((staticImg3 && fluidImg3).hasClass('wordpic3'))) {
                            rightAnswer();
                        } else if (((staticImg1 && fluidImg1).hasClass('wordpic1')) || ((staticImg2 && fluidImg2).hasClass('wordpic2'))
                            || ((staticImg3 && fluidImg3).hasClass('wordpic3'))) {
                            partialAnswer();
                        } else {
                            wrongAnswer();
                        }
                    });
                    break;   //works

                case 'order-words':
                     $('.order-words-ul').sortable({ items: "> li",
                            connectWith: ".order-words-ul",
                            axis: 'x',
                            cancel: '',
                            opacity: 0.5,
                            tolerance: 'pointer',
                            containment: 'window'
                    });

                    $(curQues).find('.confirm').on('click', function () {
                        var li1 = $('.orderword1').index();
                        var li2 = $('.orderword2').index();
                        var li3 = $('.orderword3').index();
                        var li4 = $('.orderword4').index();
                        var li5 = $('.orderword5').index();
                        var li6 = $('.orderword6').index();

                        if ((li1 == 0) && (li2 == 1) && (li3 == 2) && (li4 == 3) && (li5 == 4) && (li6 == 5)) {
                            rightAnswer();
                        } else if  ((li1 == 0) || (li2 == 1) || (li3 == 2) || (li4 == 3) || (li5 == 4) || (li6 == 6)) {
                            partialAnswer();
                        } else {
                            wrongAnswer();
                        }
                  });
                    break;   //works

                case 'order-pictures':
                     $('.order-pics').sortable({
                            items: "> img",
                            connectWith: ".order-pics",
                            appendTo: '.order-pics',
                            axis: 'x',
                            helper: 'clone',
                            cancel: '',
                            opacity: 0.5,
                            tolerance: 'pointer',
                            containment: 'window'
                    });

                    $(curQues).find('.confirm').on('click', function () {
                        var li1 = $('.orderpic1').index();
                        var li2 = $('.orderpic2').index();
                        var li3 = $('.orderpic3').index();
                        var li4 = $('.orderpic4').index();

                        if ((li1 == 0) && (li2 == 1) && (li3 == 2) && (li4 == 3)) {
                            rightAnswer();
                        } else if  ((li1 == 0) || (li2 == 1) || (li3 == 2) || (li4 == 3)) {
                            partialAnswer();
                        } else {
                            wrongAnswer();
                        }
                  });
                    break;   //works

                case 'select-picture':
                  $(curQues).find('.select-pics img').on('click', function () {
                    $(this).addClass('high-pic').siblings().removeClass('high-pic');
                  });
                  $(curQues).find('.confirm').on('click', function () {
                    var isCorrect = $('.correct').hasClass('high-pic');
                    if (isCorrect == true) {
                            rightAnswer();
                    } else {
                            wrongAnswer();
                    }
                  });
                    break;  //works

                case 'classify-words':
                    var col1 = $('.class-words-col1');
                    var col2 = $('.class-words-col2');
                    var col3 = $('.word-pool');

                    col1.sortable({ items: "> li",
                            connectWith: ('.class-words-col2, .word-pool'),
                            axis: '',
                            cancel: '',
                            opacity: 0.5,
                            tolerance: 'pointer',
                            containment: 'window'
                    });

                    col2.sortable({ items: "> li",
                            connectWith: ('.class-words-col1, .word-pool'),
                            axis: '',
                            cancel: '',
                            opacity: 0.5,
                            tolerance: 'pointer',
                            containment: 'window'
                    });

                    col3.sortable({ items: "> li",
                            connectWith: ('.class-words-col1, .class-words-col2'),
                            axis: '',
                            cancel: '',
                            opacity: 0.5,
                            tolerance: 'pointer',
                            containment: 'window'
                    });

                    $(curQues).find('.confirm').on('click', function () {

                    var listItems1 = col1.find('.class1');
                    var listItems2 = col2.find('.class1');
                    var listItems3 = col3.find('li');

                    if ((listItems2.length == 0) && ((listItems3).length == 0)) {
                            rightAnswer();
                    } else if ((listItems1.length == 0) && ((listItems3).length == 0)) {
                            wrongAnswer();
                    } else {
                            partialAnswer();
                    }

                    });

                    break;   //works

                case 'classify-pics':
                      var col1 = $('.class-pics-col1');
                      var col2 = $('.class-pics-col2');
                      var col3 = $('.pic-pool');

                    col1.sortable({ items: "> li",
                            connectWith: ('.class-pics-col2, .pic-pool'),
                            axis: '',
                            cancel: '',
                            opacity: 0.5,
                            tolerance: 'pointer',
                            containment: 'window'
                    });

                    col2.sortable({ items: "> li",
                            connectWith: ('.class-pics-col1, .pic-pool'),
                            axis: '',
                            cancel: '',
                            opacity: 0.5,
                            tolerance: 'pointer',
                            containment: 'window'
                    });

                    col3.sortable({ items: "> li",
                            connectWith: ('.class-pics-col1, .class-pics-col2'),
                            axis: '',
                            cancel: '',
                            opacity: 0.5,
                            tolerance: 'pointer',
                            containment: 'window'
                    });

                    $(curQues).find('.confirm').on('click', function () {

                    var listItems1 = col1.find('.class1');
                    var listItems2 = col2.find('.class1');
                    var listItems3 = col3.find('li');

                    if ((listItems2.length == 0) && ((listItems3).length == 0)) {
                            rightAnswer();
                    } else if ((listItems1.length == 0) && ((listItems3).length == 0)) {
                            wrongAnswer();
                    } else {
                            partialAnswer();
                    }

                    });
                    break;   //works



                case 'upload-image':

                    var holder = document.getElementById('holder'),
                    tests = {
                      filereader: typeof FileReader != 'undefined',
                      dnd: 'draggable' in document.createElement('span'),
                      formdata: !!window.FormData,
                      progress: "upload" in new XMLHttpRequest
                    },
                    support = {
                      filereader: document.getElementById('filereader'),
                      formdata: document.getElementById('formdata'),
                      progress: document.getElementById('progress')
                    },
                    acceptedTypes = {
                      'image/png': true,
                      'image/jpeg': true,
                      'image/gif': true
                    },
                    progress = document.getElementById('uploadprogress'),
                    fileupload = document.getElementById('upload');

                    "filereader formdata progress".split(' ').forEach(function (api) {
                      if (tests[api] === false) {
                        support[api].className = 'fail';
                      } else {
                        // FFS. I could have done el.hidden = true, but IE doesn't support
                        // hidden, so I tried to create a polyfill that would extend the
                        // Element.prototype, but then IE10 doesn't even give me access
                        // to the Element object. Brilliant.
                        support[api].className = 'hidden';
                      }
                    });

                    function previewfile(file) {
                      if (tests.filereader === true && acceptedTypes[file.type] === true) {
                        var reader = new FileReader();
                        reader.onload = function (event) {
                          var image = new Image();
                          image.src = event.target.result;
                         image.width = 250; // a fake resize
                          holder.appendChild(image);
                        };

                    reader.readAsDataURL(file);
                    }  else {
                    holder.innerHTML += '<p>Uploaded ' + file.name + ' ' + (file.size ? (file.size/1024|0) + 'K' : '');
                    console.log(file);
                        }
                    }

                    function readfiles(files) {
                    debugger;
                    var formData = tests.formdata ? new FormData() : null;
                    for (var i = 0; i < files.length; i++) {
                      if (tests.formdata) formData.append('file', files[i]);
                      previewfile(files[i]);
                        }
                    }

                    if (tests.dnd) {
                      holder.ondragover = function () { this.className = 'hover'; return false; };
                      holder.ondragend = function () { this.className = ''; return false; };
                      holder.ondrop = function (e) {
                        this.className = '';
                        e.preventDefault();
                        readfiles(e.dataTransfer.files);
                      }
                    } else {
                      fileupload.className = 'hidden';
                      fileupload.querySelector('input').onchange = function () {
                        readfiles(this.files);
                      };
                    }

                    $(curQues).find('.confirm').on('click', function () {
                        rightAnswer();
                    });

                    break;   //works

                    case 'score':
                      var message = 'You got ' + score + ' out of ' + ($panels.length - 2) + '.';
            
                      $('.panel-question').html('<h2>' + message + '</h2>');

                      if (score == 17) {
                            greatScore();
                      } else if (score < 12) {
                            badScore();
                      } else {
                            goodScore();
                      }
                     
                    break;   //works

            }
          $('.fb').hide();
          $('.next').hide();
          $('.panel-stuff').show();
          $('.confirm').show();
        });



        // go back a panel
//        $('.slideshow-prev').click(function () {
//            //decrease image counter
//            currentPanel--;
//            //if we are at the end let set it to 0
//            if (currentPanel < 0) currentPanel = allPanels - 1;
//            //calcualte and set position
//            setFramePosition(currentPanel);
//        });


        });

        //calculate the slideshow frame position and animate it to the new position
        function setFramePosition(pos){

            //calculate position
            var px = panelWidth*pos*-1;
            //set ul left position
            $('#slider').animate({
                left: px
            }, 305);
        }