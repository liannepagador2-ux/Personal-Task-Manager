<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Tasks</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;

            background:
                radial-gradient(circle at top left, #292442 0%, transparent 35%),
                radial-gradient(circle at bottom right, #211d38 0%, transparent 35%),
                #101018;

            color: #f5f3ff;

            min-height: 100vh;
        }


        /* =========================
           HEADER
        ========================= */

        .header {
            background: rgba(24, 22, 35, 0.88);

            border-bottom: 1px solid #302b46;

            backdrop-filter: blur(12px);

            position: sticky;
            top: 0;

            z-index: 100;
        }

        .header-content {
            max-width: 1150px;

            margin: auto;

            padding: 17px 25px;

            display: flex;

            justify-content: space-between;

            align-items: center;
        }


        .logo {
            display: flex;

            align-items: center;

            gap: 11px;

            font-size: 20px;

            font-weight: bold;
        }


        .logo-icon {
            width: 38px;
            height: 38px;

            display: flex;

            align-items: center;
            justify-content: center;

            background: linear-gradient(
                135deg,
                #9b8cff,
                #6f5bd3
            );

            border-radius: 12px;

            box-shadow:
                0 5px 20px rgba(126, 103, 230, 0.3);
        }


        .new-task {
            text-decoration: none;

            color: white;

            background: linear-gradient(
                135deg,
                #9b8cff,
                #725bd5
            );

            padding: 11px 17px;

            border-radius: 11px;

            font-size: 14px;

            font-weight: bold;

            box-shadow:
                0 7px 20px rgba(116, 91, 213, 0.25);

            transition: 0.2s;
        }


        .new-task:hover {
            transform: translateY(-2px);

            box-shadow:
                0 10px 25px rgba(116, 91, 213, 0.4);
        }


        /* =========================
           MAIN
        ========================= */

        .container {
            max-width: 1150px;

            margin: auto;

            padding: 50px 25px;
        }


        /* =========================
           WELCOME
        ========================= */

        .welcome {
            margin-bottom: 30px;
        }


        .welcome h1 {
            margin: 0;

            font-size: 34px;

            letter-spacing: -1px;
        }


        .welcome p {
            margin: 9px 0 0;

            color: #9b98aa;

            font-size: 15px;
        }


        /* =========================
           STATS
        ========================= */

        .stats {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 16px;

            margin-bottom: 28px;
        }


        .stat-card {
            position: relative;

            overflow: hidden;

            background: rgba(28, 26, 40, 0.85);

            border: 1px solid #37314f;

            border-radius: 17px;

            padding: 21px;

            box-shadow:
                0 10px 30px rgba(0, 0, 0, 0.15);
        }


        .stat-card::after {
            content: "";

            position: absolute;

            width: 80px;
            height: 80px;

            background: #8875e8;

            opacity: 0.08;

            border-radius: 50%;

            right: -25px;
            top: -25px;
        }


        .stat-label {
            color: #9995aa;

            font-size: 13px;

            margin-bottom: 9px;
        }


        .stat-number {
            font-size: 27px;

            font-weight: bold;

            color: #eeeaff;
        }


        /* =========================
           MESSAGE
        ========================= */

        .notice {
            background: rgba(75, 63, 120, 0.25);

            border: 1px solid #514678;

            color: #cfc7ff;

            padding: 13px 17px;

            border-radius: 12px;

            margin-bottom: 20px;
        }


        /* =========================
           TASK GRID
        ========================= */

        .task-grid {
            display: grid;

            grid-template-columns:
                repeat(3, 1fr);

            gap: 17px;
        }


        /* =========================
           TASK CARD
        ========================= */

        .task {
            position: relative;

            background:
                linear-gradient(
                    145deg,
                    rgba(35, 32, 51, 0.95),
                    rgba(25, 23, 36, 0.95)
                );

            border: 1px solid #37314e;

            border-radius: 18px;

            padding: 21px;

            min-height: 225px;

            display: flex;

            flex-direction: column;

            justify-content: space-between;

            overflow: visible;

            transition: 0.25s;

            box-shadow:
                0 10px 30px rgba(0, 0, 0, 0.18);
        }


        .task:hover {
            transform: translateY(-4px);

            border-color: #62558e;

            box-shadow:
                0 15px 35px rgba(83, 68, 150, 0.18);
        }


        /* small decorative glow */

        .task::before {
            content: "";

            position: absolute;

            width: 90px;
            height: 90px;

            border-radius: 50%;

            background: #8b78e8;

            opacity: 0.05;

            right: -30px;
            top: -30px;

            pointer-events: none;
        }


        /* =========================
           TASK HEADER
        ========================= */

        .task-header {
            display: flex;

            justify-content: space-between;

            align-items: flex-start;

            gap: 12px;
        }


        .task-title {
            display: flex;

            align-items: flex-start;

            gap: 11px;

            min-width: 0;
        }


        .task-dot {
            width: 10px;
            height: 10px;

            margin-top: 6px;

            flex-shrink: 0;

            border-radius: 50%;

            background: #9b8cff;

            box-shadow:
                0 0 12px rgba(155, 140, 255, 0.7);
        }


        .task h3 {
            margin: 0 0 8px;

            font-size: 17px;

            color: #f0edff;

            word-break: break-word;
        }


        .description {
            margin: 0;

            color: #9995a9;

            font-size: 13px;

            line-height: 1.55;

            word-break: break-word;
        }


        /* =========================
           STATUS
        ========================= */

        .status-area {
            position: relative;

            flex-shrink: 0;
        }


        .status-button {
            background: #27233a;

            border: 1px solid #40385d;

            color: #cfc8ed;

            padding: 7px 10px;

            border-radius: 9px;

            cursor: pointer;

            font-size: 11px;

            min-width: 100px;

            transition: 0.2s;
        }


        .status-button:hover {
            background: #302a48;

            border-color: #62558e;
        }


        .status-menu {
            display: none;

            position: absolute;

            right: 0;

            top: 42px;

            width: 145px;

            background: #252138;

            border: 1px solid #453b62;

            border-radius: 11px;

            overflow: hidden;

            box-shadow:
                0 15px 35px rgba(0, 0, 0, 0.4);

            z-index: 100;
        }


        .status-menu.show {
            display: block;
        }


        .status-option {
            width: 100%;

            padding: 11px 13px;

            border: none;

            background: transparent;

            color: #ddd8ee;

            text-align: left;

            cursor: pointer;

            font-size: 12px;
        }


        .status-option:hover {
            background: #332d49;
        }


        /* =========================
           FOOTER
        ========================= */

        .task-footer {
            margin-top: 20px;

            padding-top: 14px;

            border-top: 1px solid #302b40;

            display: flex;

            justify-content: space-between;

            align-items: center;

            gap: 10px;
        }


        .due-date {
            color: #918da1;

            font-size: 11px;
        }


        /* =========================
           ACTIONS
        ========================= */

        .actions {
            display: flex;

            gap: 6px;
        }


        .edit {
            text-decoration: none;

            background: #29253a;

            border: 1px solid #40385a;

            color: #c9c3e1;

            padding: 7px 10px;

            border-radius: 8px;

            font-size: 11px;

            transition: 0.2s;
        }


        .edit:hover {
            background: #36304b;

            color: white;
        }


        .delete {
            background: #302127;

            border: 1px solid #4a303b;

            color: #d99ba7;

            padding: 7px 10px;

            border-radius: 8px;

            font-size: 11px;

            cursor: pointer;

            transition: 0.2s;
        }


        .delete:hover {
            background: #402a33;
        }


        /* =========================
           EMPTY
        ========================= */

        .empty {
            grid-column: 1 / -1;

            text-align: center;

            background: rgba(29, 27, 41, 0.9);

            border: 1px solid #37314e;

            border-radius: 18px;

            padding: 70px 20px;
        }


        .empty-icon {
            font-size: 38px;

            color: #9b8cff;

            margin-bottom: 12px;
        }


        .empty h3 {
            margin: 0 0 8px;

            font-size: 20px;
        }


        .empty p {
            color: #908c9e;

            margin: 0 0 22px;
        }


        /* =========================
           TABLET
        ========================= */

        @media (max-width: 900px) {

            .task-grid {
                grid-template-columns:
                    repeat(2, 1fr);
            }

        }


        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 650px) {

            .header-content {
                padding: 15px 18px;
            }


            .container {
                padding: 35px 18px;
            }


            .stats {
                grid-template-columns: 1fr;
            }


            .task-grid {
                grid-template-columns: 1fr;
            }


            .task-header {
                flex-direction: column;
            }


            .status-area {
                width: 100%;
            }


            .status-button {
                width: 100%;
            }


            .status-menu {
                left: 0;

                right: auto;
            }


            .task-footer {
                flex-direction: column;

                align-items: flex-start;
            }


            .actions {
                width: 100%;
            }


            .edit,
            .delete {
                flex: 1;

                text-align: center;
            }


            .welcome h1 {
                font-size: 28px;
            }

        }

    </style>

</head>


<body>


    <!-- HEADER -->

    <header class="header">

        <div class="header-content">


            <div class="logo">

                <div class="logo-icon">
                    ✓
                </div>

                Task Manager

            </div>


            <a
                href="/tasks/new"
                class="new-task"
            >
                + New Task
            </a>


        </div>

    </header>



    <!-- MAIN -->

    <main class="container">


        <div class="welcome">

            <h1>
                My Tasks ✨
            </h1>

            <p>
                Stay organized and keep track of what needs to be done.
            </p>

        </div>



        <!-- STATS -->

        <div class="stats">


            <div class="stat-card">

                <div class="stat-label">
                    Total Tasks
                </div>

                <div class="stat-number">
                    {{ $taskList->count() }}
                </div>

            </div>


            <div class="stat-card">

                <div class="stat-label">
                    Pending
                </div>

                <div class="stat-number">
                    {{ $taskList->where('status', 'Pending')->count() }}
                </div>

            </div>


            <div class="stat-card">

                <div class="stat-label">
                    Completed
                </div>

                <div class="stat-number">
                    {{ $taskList->where('status', 'Completed')->count() }}
                </div>

            </div>


        </div>



        <!-- MESSAGE -->

        @if(session('message'))

            <div class="notice">
                {{ session('message') }}
            </div>

        @endif



        <!-- TASKS -->

        <div class="task-grid">


            @forelse($taskList as $item)


                <div class="task">


                    <div>


                        <div class="task-header">


                            <div class="task-title">


                                <div class="task-dot"></div>


                                <div>

                                    <h3>
                                        {{ $item->task_name }}
                                    </h3>

                                    <p class="description">
                                        {{ $item->description ?: 'No description provided.' }}
                                    </p>

                                </div>


                            </div>



                            <!-- STATUS -->

                            <div class="status-area">


                                <button
                                    type="button"
                                    class="status-button"
                                    onclick="toggleStatus('{{ $item->id }}')"
                                >

                                    @if($item->status === 'Completed')

                                        ☑ Completed

                                    @else

                                        ☐ Pending

                                    @endif

                                    ▾

                                </button>



                                <div
                                    id="status-menu-{{ $item->id }}"
                                    class="status-menu"
                                >


                                    <form
                                        action="/tasks/{{ $item->id }}"
                                        method="POST"
                                    >

                                        @csrf

                                        @method('PUT')


                                        <input
                                            type="hidden"
                                            name="task_name"
                                            value="{{ $item->task_name }}"
                                        >

                                        <input
                                            type="hidden"
                                            name="description"
                                            value="{{ $item->description }}"
                                        >

                                        <input
                                            type="hidden"
                                            name="due_date"
                                            value="{{ $item->due_date }}"
                                        >

                                        <input
                                            type="hidden"
                                            name="status"
                                            value="Pending"
                                        >


                                        <button
                                            type="submit"
                                            class="status-option"
                                        >
                                            ☐ Pending
                                        </button>

                                    </form>



                                    <form
                                        action="/tasks/{{ $item->id }}"
                                        method="POST"
                                    >

                                        @csrf

                                        @method('PUT')


                                        <input
                                            type="hidden"
                                            name="task_name"
                                            value="{{ $item->task_name }}"
                                        >

                                        <input
                                            type="hidden"
                                            name="description"
                                            value="{{ $item->description }}"
                                        >

                                        <input
                                            type="hidden"
                                            name="due_date"
                                            value="{{ $item->due_date }}"
                                        >

                                        <input
                                            type="hidden"
                                            name="status"
                                            value="Completed"
                                        >


                                        <button
                                            type="submit"
                                            class="status-option"
                                        >
                                            ☑ Completed
                                        </button>

                                    </form>


                                </div>

                            </div>


                        </div>


                    </div>



                    <!-- FOOTER -->

                    <div class="task-footer">


                        <div class="due-date">

                            📅

                            @if($item->due_date)

                                Due
                                {{ \Carbon\Carbon::parse($item->due_date)->format('M d, Y') }}

                            @else

                                No due date

                            @endif

                        </div>



                        <div class="actions">


                            <a
                                href="/tasks/{{ $item->id }}/edit"
                                class="edit"
                            >
                                ✎ Edit
                            </a>


                            <form
                                action="/tasks/{{ $item->id }}"
                                method="POST"
                                style="margin: 0;"
                            >

                                @csrf

                                @method('DELETE')


                                <button
                                    type="submit"
                                    class="delete"
                                    onclick="return confirm('Are you sure you want to delete this task?')"
                                >
                                    Delete
                                </button>

                            </form>


                        </div>


                    </div>


                </div>


            @empty


                <div class="empty">

                    <div class="empty-icon">
                        ✦
                    </div>

                    <h3>
                        No tasks yet
                    </h3>

                    <p>
                        Create your first task and start getting things done.
                    </p>

                    <a
                        href="/tasks/new"
                        class="new-task"
                    >
                        + Create Task
                    </a>

                </div>


            @endforelse


        </div>


    </main>



    <script>

        function toggleStatus(id) {

            const menu =
                document.getElementById('status-menu-' + id);

            menu.classList.toggle('show');

        }


        document.addEventListener('click', function(event) {

            if (!event.target.closest('.status-area')) {

                document
                    .querySelectorAll('.status-menu')
                    .forEach(function(menu) {

                        menu.classList.remove('show');

                    });

            }

        });

    </script>


</body>

</html>