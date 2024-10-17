<template>
    <div>
        <header class="text-white bg-red-700">
            <nav class="flex items-center justify-between max-w-screen-lg p-4 mx-auto">
                <div class="space-x-6">
                    <a href="/">Home</a>
                    <a href="/about">About</a>
                    <a href="/profile">Profile</a>
                </div>
            </nav>
        </header>

        <main class="p-4">
            <slot />
        </main>
    </div>
</template>
