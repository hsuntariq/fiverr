<style>
    .skeleton-loader {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .skeleton-bar {
        width: 100%;
        height: 8px;
        background-color: #e0e0e0;
        border-radius: 4px;
        animation: shimmer 1.5s infinite ease-in-out;
    }

    .skeleton-bar.short {
        width: 80%;
    }

    .skeleton-bar.shorter {
        width: 60%;
    }

    @keyframes shimmer {
        0% {
            background-color: #f0f0f0;
        }

        50% {
            background-color: #e0e0e0;
        }

        100% {
            background-color: #f0f0f0;
        }
    }
</style>
<div class="skeleton-loader w-25 d-none">
    {{-- <div class="skeleton-bar"></div>
    <div class="skeleton-bar short"></div> --}}
    <div class="skeleton-bar shorter"></div>
    <div class="skeleton-bar shorter"></div>
    <div class="skeleton-bar shorter"></div>
    <div class="skeleton-bar shorter"></div>
    <div class="skeleton-bar shorter"></div>
</div>
