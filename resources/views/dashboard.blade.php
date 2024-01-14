<x-app-layout>
    <div x-data="tasksController()" x-init="init" class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-semibold">Tasks List</h1>
            <button
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                @click="openModal"
            >
                Add Task
            </button>
        </div>

        <!-- Task List -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <!-- Display tasks here -->
        </div>

        <!-- Add/Edit Task Modal -->
        <div x-show="isModalOpen" class="fixed inset-0 overflow-y-auto flex items-center justify-center">
            <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50" @click="closeModal"></div>

            <div class="modal-container bg-white w-96 mx-auto rounded shadow-lg z-50 overflow-y-auto">
                <!-- Modal Content -->
                <div class="modal-content p-4">
                    <h2 class="text-2xl font-semibold mb-4">Add Task</h2>
                    <!-- Task form -->
                    <form @submit.prevent="saveTask">
                        <div class="mb-4">
                            <label for="title" class="block text-sm font-semibold text-gray-600">Title:</label>
                            <input type="text" id="title" name="title" class="w-full p-2 border border-gray-300 rounded">
                        </div>
                        <div class="mb-4">
                            <label for="date" class="block text-sm font-semibold text-gray-600">Date:</label>
                            <input type="date" id="date" name="date" class="w-full p-2 border border-gray-300 rounded">
                        </div>
                        <div class="mb-4">
                            <label for="time" class="block text-sm font-semibold text-gray-600">Time:</label>
                            <input type="time" id="time" name="time" class="w-full p-2 border border-gray-300 rounded">
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block text-sm font-semibold text-gray-600">Description:</label>
                            <textarea id="description" name="description" class="w-full p-2 border border-gray-300 rounded"></textarea>
                        </div>
                        <button
                            type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        >
                            Save Task
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script src=" https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js "></script>
        <script>
            function tasksController() {
                return {
                    isModalOpen: false,
                    init() {
                        console.log('log');
                    },
                    openModal() {
                        this.isModalOpen = true;
                    },
                    closeModal() {
                        this.isModalOpen = false;
                    },
                    saveTask() {
                        // Add logic to save task (e.g., use Axios to send a request to your Laravel backend)
                        // Once the task is saved, you can close the modal and update the tasks list
                        this.closeModal();
                    },
                };
            }
        </script>
    @endpush
</x-app-layout>
