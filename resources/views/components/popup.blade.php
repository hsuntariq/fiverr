<x-layout>

    <style>
        .notification {
            position: fixed;
            bottom: 30px;
            left: 20px;
            z-index: 1055;
            min-width: 300px;
            padding: 15px;
            background-color: var(--bs-success);
            color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            animation: slide-in 0.5s forwards, fade-out 0.5s 4.5s forwards;
            transition: all 0.7s;
            transform: translateY(300px);
        }
    </style>
    </head>

    <body>


        <div class="notification" id="notification">
            <strong>Success!</strong> Your action was completed successfully.
        </div>


        <!-- Notification Element -->



</x-layout>
