/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function reply()  //on add input button click
{
    var a = document.getElementsByName("reply");
            //add input box
            $(a).append('<br>' +
                            '<div class="row">' +
                                '<div class="col-md-7">' +
                                    '<table class="boxcolor">' +
                                        '<tr><td>' +
                                            '<form class="comment" method="POST" role="form">' +
                                                '<div class="form-group">' +
                                                    '<textarea name="komentar" class="form-control" rows="3" placeholder="Write your comment..." value=""></textarea>' +
                                                '</div>' +
                                                '<input type ="hidden" name="tutorialID" value="<%=t.getId()%>" />' +
                                                '<input type ="hidden" name="uid" value="Namanya Namanya" />' +
                                                '<button type="submit" class="btn btn-primary floatr">Post</button>' +
                                            '</form>' +
                                        '</td></tr>' +
                                    '</table>' +
                                '</div>' +
                            '</div> <!-- comment form -->' +
                            '<div class="row">' +
                                '<div class="col-md-7">' +
                                    '<table class="boxcolor" width="650px">' +
                                        '<tr><td>' +
                                            '<div class="row comment2">' +
                                                '<div class="col-md-1 commentpad">AS:</div>' +
                                                '<div class="col-md-1"><img src="http://placehold.it/50x50"></div>' +
                                                '<div class="col-md-3 commentpad commentname">Namanya Namanya</div>' +
                                            '</div>' +
                                        '</td></tr>' +
                                    '</table>' +
                                '</div>' +
                            '</div><!-- comment other -->');
}
