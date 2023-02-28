<style>
    /* Google Font Import - Poppins */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    :root {
        /* ===== Colors ===== */
        --body-color: #f5f5f5;
        --sidebar-color: #FFF;
        --primary-color: #695CFE;
        --primary-color-light: #F6F5FF;
        --toggle-color: #DDD;
        --text-color: #707070;

        /* ====== Transition ====== */
        --tran-03: all 0.2s ease;
        --tran-03: all 0.3s ease;
        --tran-04: all 0.3s ease;
        --tran-05: all 0.3s ease;
    }

    body {
        min-height: 100vh;
        background-color: var(--body-color);
        transition: var(--tran-05);
    }

    ::selection {
        background-color: var(--primary-color);
        color: #fff;
    }

    body.dark {
        --body-color: #18191a;
        --sidebar-color: #242526;
        --primary-color: #3a3b3c;
        --primary-color-light: #3a3b3c;
        --toggle-color: #fff;
        --text-color: #ccc;
    }

    /* ===== Sidebar ===== */
    .sidebar {
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 280px;
        padding: 10px 14px;
        background: var(--sidebar-color);
        transition: var(--tran-05);
        z-index: 100;
    }

    .sidebar.close {
        width: 120px;
    }

    div.polaroid {
        width: 80%;
        background-color: white;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    img {
        width: 100%
    }

    div.container {
        text-align: center;
        padding: 10px 20px;
    }


    .sidebar li {
        height: 60px;
        list-style: none;
        display: flex;
        align-items: center;
        margin-top: 10px;
    }

    .sidebar header .image,
    .sidebar .icon {
        min-width: 60px;
        border-radius: 6px;
    }

    .sidebar .icon {
        /* min-width: 60px; */
        border-radius: 6px;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
    }

    .sidebar .text,
    .sidebar .icon {
        color: var(--text-color);
        transition: var(--tran-03);
    }

    .sidebar .text {
        font-size: 15px;
        text-align: center;
        width: fit-content;
        justify-content: center;
        display: inline-block;
        font-weight: 500;
        text-align: center;
        white-space: nowrap;
        opacity: 1;
    }

    .sidebar.close .text {
        opacity: 0;
    }


    .sidebar header {
        position: relative;
    }

    .sidebar header .image-text {
        display: flex;
        align-items: center;
    }

    .sidebar header .logo-text {
        display: flex;
        flex-direction: column;
    }

    header .image-text .name {
        margin-top: 1px;
        font-size: 40px;
        font-weight: 600;
        text-align: center;
        width: fit-content;
        justify-content: center;
        display: inline-block;
    }

    header .image-text .profession {
        font-size: 16px;
        margin-top: -2px;
        display: block;
    }

    .sidebar header .image {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .sidebar header .image img {
        width: 40px;
        border-radius: 6px;
    }

    .sidebar header .toggle {
        position: absolute;
        top: 50%;
        right: -25px;
        transform: translateY(-50%) rotate(180deg);
        height: 25px;
        width: 25px;
        background-color: var(--primary-color);
        color: var(--sidebar-color);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        cursor: pointer;
        transition: var(--tran-05);
    }

    body.dark .sidebar header .toggle {
        color: var(--text-color);
    }

    .sidebar.close .toggle {
        transform: translateY(-50%) rotate(0deg);
    }

    .sidebar .menu {
        margin-top: 15px;
    }

    .sidebar li.search-box {
        border-radius: 6px;
        background-color: var(--primary-color-light);
        cursor: pointer;
        transition: var(--tran-05);
    }

    .sidebar li.search-box input {
        height: 100%;
        width: 100%;
        outline: none;
        border: none;
        background-color: var(--primary-color-light);
        color: var(--text-color);
        border-radius: 6px;
        font-size: 17px;
        font-weight: 500;
        transition: var(--tran-05);
    }

    .sidebar li a {
        list-style: none;
        height: 103%;
        background-color: transparent;
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        border-radius: 6px;
        text-decoration: none;
        transition: var(--tran-03);
    }

    .sidebar li a:hover {
        background-color: var(--primary-color);
    }

    .sidebar li a:hover .icon,
    .sidebar li a:hover .text {
        color: var(--sidebar-color);
    }

    body.dark .sidebar li a:hover .icon,
    body.dark .sidebar li a:hover .text {
        color: var(--text-color);
    }

    .sidebar .menu-bar {
        height: calc(100% - 55px);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        overflow-y: scroll;
    }

    .menu-bar::-webkit-scrollbar {
        display: none;
    }

    .sidebar .menu-bar .mode {
        border-radius: 6px;
        background-color: var(--primary-color-light);
        position: relative;
        transition: var(--tran-05);
    }

    .menu-bar .mode .sun-moon {
        height: 30px;
        width: 60px;
    }

    .mode .sun-moon i {
        position: absolute;
    }

    .mode .sun-moon i.sun {
        opacity: 0;
    }

    body.dark .mode .sun-moon i.sun {
        opacity: 1;
    }

    body.dark .mode .sun-moon i.moon {
        opacity: 0;
    }

    .menu-bar .bottom-content .toggle-switch {
        position: absolute;
        right: 0;
        height: 50%;
        min-width: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 6px;
        cursor: pointer;
    }

    .toggle-switch .switch {
        position: relative;
        height: 22px;
        width: 40px;
        border-radius: 25px;
        background-color: var(--toggle-color);
        transition: var(--tran-05);
    }

    .switch::before {
        content: '';
        position: absolute;
        height: 15px;
        width: 15px;
        border-radius: 50%;
        top: 50%;
        left: 5px;
        transform: translateY(-50%);
        background-color: var(--sidebar-color);
        transition: var(--tran-04);
    }

    body.dark .switch::before {
        left: 20px;
    }

    .home {
        position: absolute;
        top: 0;
        top: 0;
        left: 250px;
        height: 100vh;
        width: calc(100% - 250px);
        background-color: var(--body-color);
        transition: var(--tran-05);
    }

    .home .text {
        font-size: 30px;
        font-weight: 500;
        color: var(--text-color);
        padding: 12px 60px;
    }

    .sidebar.close~.home {
        left: 78px;
        height: 100vh;
        width: calc(100% - 78px);
    }

    body.dark .home .text {
        color: var(--text-color);
    }

    .Manage {
        box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
        background-color: white;
        width: 100;
        border-radius: 16px;
        padding: 24px;
        font-size: 15px;

    }


    .Inner {
        box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
        background-color: var(--body-color);
        border-collapse: collapse;
        width: 100%;
        position: relative;
        border: 1px solid #ddd;
        padding: 8px;
        font-size: 20px;
    }

    a:link {
        text-decoration: none;
        color: var(--text-color);
    }

    a:visited {
        text-decoration: none;
        color: var(--text-color);

    }

    a:hover {
        text-decoration: underline;
        color: var(--text-color);

    }

    a:active {
        text-decoration: underline;
        color: var(--text-color);

    }

    


    .user {
        width: 5%;
        height: auto;
        opacity: 0.2;
    }

    footer {
        background-color: #777;
        padding: 10px;
        text-align: center;
        color: white;
    }
</style>

<!----===== Boxicons CSS ===== -->
<nav class="sidebar close">
    <header>

        <div class="text logo-text">
            <span class="name">Bangalore Vaishnavi Lions Club</span>

        </div>


        <i class='bx bx-chevron-right toggle'></i>
    </header>

    <div class="menu-bar">
        <div class="menu">
            <span class="polaroid">
                <img src="Lions_Clubs_International_logo.svg.png">
            </span>


            <ul class="menu-links">


                <li class="nav-item">
                    <a href="main.php" class="nav-link active">
                        <i>
                            <box-icon name='home'></box-icon>
                        </i>
                        <span class="text nav-text">Dashboard</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="items.php" class="nav-link active">
                        <i>
                            <box-icon name='plus-circle'></box-icon>
                        </i>
                        <span class="text nav-text">Add new items</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="remove.php" class="nav-link active">
                        <i>
                            <box-icon name='minus-circle'></box-icon>
                        </i>

                        <span class="text nav-text">Remove items</span>

                    </a>
                </li>


                <li class="nav-item">
                    <a href="itemssold.php" class="nav-link active">
                        <i>
                            <box-icon name='food-menu'></box-icon>
                        </i>
                        <span class="text nav-text">Items sold</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="purchased.php" class="nav-link active">
                        <i>
                            <box-icon name='cart-add'></box-icon>
                        </i>
                        <span class="text nav-text">Items purchased</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pricelist.php" class="nav-link active">
                        <i>
                            <box-icon name='edit-alt'></box-icon>
                        </i>

                        <span class="text nav-text">Edit price list</span>

                    </a>
                </li>
                <li class="nav-item">
                    <a href="report.php" class="nav-link active">
                        <i>
                        <box-icon type='solid' name='report'></box-icon>
                        </i>

                        <span class="text nav-text">Report</span>

                    </a>
                </li>


            </ul>
        </div>

        <div class="bottom-content">
            <li class="node">
                <a href="logout.php">
                    <i class='bx bx-log-out icon'></i>
                    <span class="text nav-text" name="logged_in">Logout</span>
                </a>

            </li>




        </div>
    </div>
</nav>
<script>
    const body = document.querySelector('body'),
        sidebar = body.querySelector('nav'),
        toggle = body.querySelector(".toggle"),
        modeSwitch = body.querySelector(".toggle-switch"),
        modeText = body.querySelector(".mode-text");
    Usermanage = body.querySelector(".manage");
    sect = body.querySelector(".home");


    toggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    });
</script>