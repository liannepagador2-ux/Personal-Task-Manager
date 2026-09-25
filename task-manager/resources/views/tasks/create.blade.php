<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add New Task</title>

    <style>

        * {
            box-sizing: border-box;
        }


        body {
            margin: 0;

            font-family: Arial, Helvetica, sans-serif;

            background:
                radial-gradient(
                    circle at top left,
                    #292442 0%,
                    transparent 35%
                ),
                radial-gradient(
                    circle at bottom right,
                    #211d38 0%,
                    transparent 35%
                ),
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
                0 5px 20px
                rgba(126, 103, 230, 0.3);
        }


        .back {
            color: #aaa6bb;

            text-decoration: none;

            font-size: 14px;

            transition: 0.2s;
        }


        .back:hover {
            color: #ffffff;
        }


        /* =========================
           MAIN
        ========================= */

        .container {
            max-width: 720px;

            margin: auto;

            padding: 55px 25px;
        }


        /* =========================
           TITLE
        ========================= */

        .page-title {
            margin-bottom: 25px;
        }


        .page-title h1 {
            margin: 0 0 8px;

            font-size: 32px;

            letter-spacing: -0.5px;
        }


        .page-title p {
            margin: 0;

            color: #9995aa;

            font-size: 14px;
        }


        /* =========================
           FORM CARD
        ========================= */

        .form-box {
            position: relative;

            overflow: hidden;

            background:
                linear-gradient(
                    145deg,
                    rgba(35, 32, 51, 0.96),
                    rgba(25, 23, 36, 0.96)
                );

            border: 1px solid #37314e;

            border-radius: 20px;

            padding: 30px;

            box-shadow:
                0 15px 45px
                rgba(0, 0, 0, 0.25);
        }


        .form-box::before {
            content: "";

            position: absolute;

            width: 150px;

            height: 150px;

            border-radius: 50%;

            background: #8b78e8;

            opacity: 0.06;

            right: -60px;

            top: -60px;

            pointer-events: none;
        }


        /* =========================
           FORM GROUP
        ========================= */

        .form-group {
            margin-bottom: 21px;

            position: relative;

            z-index: 1;
        }


        label {
            display: block;

            margin-bottom: 8px;

            color: #ddd8ed;

            font-size: 13px;

            font-weight: bold;
        }


        input,
        textarea,
        select {
            width: 100%;

            padding: 13px 14px;

            background: rgba(16, 16, 24, 0.8);

            border: 1px solid #40385a;

            border-radius: 11px;

            color: #f1effa;

            font-family: Arial, Helvetica, sans-serif;

            font-size: 14px;

            outline: none;

            transition: 0.2s;
        }


        input::placeholder,
        textarea::placeholder {
            color: #686476;
        }


        input:focus,
        textarea:focus,
        select:focus {
            border-color: #8978e7;

            box-shadow:
                0 0 0 3px
                rgba(137, 120, 231, 0.1);
        }


        textarea {
            min-height: 130px;

            resize: vertical;
        }


        select {
            cursor: pointer;
        }


        option {
            background: #252138;

            color: white;
        }


        /* =========================
           ERRORS
        ========================= */

        .error {
            background: rgba(74, 43, 49, 0.35);

            border: 1px solid #573640;

            color: #e0a3ae;

            padding: 13px 16px;

            border-radius: 11px;

            margin-bottom: 22px;

            font-size: 13px;
        }


        .error ul {
            margin: 0;

            padding-left: 20px;
        }


        /* =========================
           BUTTONS
        ========================= */

        .buttons {
            display: flex;

            justify-content: flex-end;

            gap: 10px;

            padding-top: 8px;
        }


        .cancel {
            text-decoration: none;

            background: #29253a;

            border: 1px solid #40385a;

            color: #c9c3df;

            padding: 11px 18px;

            border-radius: 10px;

            font-size: 13px;

            transition: 0.2s;
        }


        .cancel:hover {
            background: #353047;

            color: white;
        }


        .save {
            background: linear-gradient(
                135deg,
                #9b8cff,
                #725bd5
            );

            border: none;

            color: white;

            padding: 11px 20px;

            border-radius: 10px;

            font-size: 13px;

            font-weight: bold;

            cursor: pointer;

            box-shadow:
                0 7px 20px
                rgba(116, 91, 213, 0.25);

            transition: 0.2s;
        }


        .save:hover {
            transform: translateY(-2px);

            box-shadow:
                0 10px 25px
                rgba(116, 91, 213, 0.4);
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


            .form-box {
                padding: 23px;

                border-radius: 17px;
            }


            .page-title h1 {
                font-size: 28px;
            }


            .buttons {
                flex-direction: column-reverse;
            }


            .cancel,
            .save {
                width: 100%;

                text-align: center;
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
                href="/tasks"
                class="back"
            >
                ← Back to Tasks
            </a>


        </div>

    </header>



    <!-- MAIN -->

    <main class="container">


        <div class="page-title">

            <h1>
                Add New Task ✨
            </h1>

            <p>
                Create a task and keep your day organized.
            </p>

        </div>



        <div class="form-box">


            <!-- ERRORS -->

            @if($errors->any())

                <div class="error">

                    <ul>

                        @foreach($errors->all() as $error)

                            <li>
                                {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>

            @endif



            <!-- FORM -->

            <form
                action="/tasks"
                method="POST"
            >

                @csrf


                <!-- TASK NAME -->

                <div class="form-group">

                    <label>
                        Task Name
                    </label>

                    <input
                        type="text"
                        name="task_name"
                        placeholder="What do you need to do?"
                        value="{{ old('task_name') }}"
                    >

                </div>



                <!-- DESCRIPTION -->

                <div class="form-group">

                    <label>
                        Description
                    </label>

                    <textarea
                        name="description"
                        placeholder="Add some details about your task..."
                    >{{ old('description') }}</textarea>

                </div>



                <!-- STATUS -->

                <div class="form-group">

                    <label>
                        Status
                    </label>

                    <select name="status">

                        <option
                            value="Pending"
                            {{ old('status', 'Pending') == 'Pending' ? 'selected' : '' }}
                        >
                            ☐ Pending
                        </option>

                        <option
                            value="Completed"
                            {{ old('status') == 'Completed' ? 'selected' : '' }}
                        >
                            ☑ Completed
                        </option>

                    </select>

                </div>



                <!-- DUE DATE -->

                <div class="form-group">

                    <label>
                        Due Date
                    </label>

                    <input
                        type="date"
                        name="due_date"
                        value="{{ old('due_date') }}"
                    >

                </div>



                <!-- BUTTONS -->

                <div class="buttons">

                    <a
                        href="/tasks"
                        class="cancel"
                    >
                        Cancel
                    </a>


                    <button
                        type="submit"
                        class="save"
                    >
                        ✨ Save Task
                    </button>

                </div>


            </form>


        </div>


    </main>


</body>

</html>