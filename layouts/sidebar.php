<aside class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 280px;">

    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi pe-none me-2" width="40" height="32">
            <use xlink:href="#bootstrap" />
        </svg>
        <span class="fs-4">Sidebar</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="/" class="<?php echo $_SERVER['REQUEST_URI'] === "/"  ? 'nav-link active' : 'nav-link link-body-emphasis'; ?>" aria-current="page">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#home" />
                </svg>
                Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a href="/task.php" class="<?php echo $_SERVER['REQUEST_URI'] === "/task.php"  ? 'nav-link active' : 'nav-link link-body-emphasis'; ?>" aria-current="page">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#speedometer2" />
                </svg>
                Tugas
            </a>
        </li>
        <li class="nav-item">
            <a href="/employee.php" class="<?php echo $_SERVER['REQUEST_URI'] === "/employee.php"  ? 'nav-link active' : 'nav-link link-body-emphasis'; ?>" aria-current="page">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#speedometer2" />
                </svg>
                Karyawan
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>mdo</strong>
        </a>
        <ul class="dropdown-menu text-small shadow">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
    </div>
</aside>