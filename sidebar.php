<div class="sidebar-menu">
    <div class="sidebar-header"  style="  background-color: lightblue;" >
        <div class="logo">
            <a href="index.php"><img src="assets/images/icon/logo.png" alt="logo"></a>
        </div>
    </div>
    <div class="main-menu">
        <div class="menu-inner">
            <nav>
                <ul class="metismenu" id="menu">
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>Blog</span></a>
                        <ul class="collapse">
                            <li><a href="createblog.php">Ajouter un article</a></li>
                            <li><a href="readBlog.php">Tous les articles</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>PostIt
                            </span></a>
                        <ul class="collapse">
                            <li><a href="createpostit.php">Ajouter Post it</a></li>
                            <li><a href="readPostit.php">Tous les post it</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-pie-chart"></i><span>Reunion</span></a>
                        <ul class="collapse">
                            <li><a href="createReunion.php">Ajouter un reunion</a></li>
                            <li><a href="readReunion.php">Tous les reunions</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-palette"></i><span>Compte rendue</span></a>
                        <ul class="collapse">
                            <li><a href="createCompteRendu.php">Ajouter Compte rendu</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="ti-slice"></i><span>note
                                Service</span></a>
                        <ul class="collapse">
                            <li><a href="createnoteService.php">new note service</a></li>
                            <li><a href="readNoteService.php">all note service</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-table"></i>
                            <span> boite à idées</span></a>
                        <ul class="collapse">
                            <li><a href="createBrainstorming.php">Ajouter une idée</a></li>
                            <li><a href="readBrainstorming.php"> boite à idées</a></li>
                        </ul>
                    </li>
                    <li><a href="createNewsletter.php"><i class="ti-map-alt"></i> <span>newsletter</span></a>
                    </li>
                    <li><a href="createEmail.php"><i class="ti-receipt"></i> <span>Emailing</span></a></li>



                </ul>
            </nav>
        </div>
    </div>
</div>
<script>
    var links = document.getElementsByTagName('a');

    for (var i = 0; i < links.length; i++) {
        if (links[i].href == window.location.href) {
            links[i].parentElement.classList.add("active")

            links[i].parentElement.parentElement.parentElement.classList.add("active")
        }
    }
</script>