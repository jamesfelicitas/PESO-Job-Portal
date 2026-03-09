@extends('layouts.employer')

@section('title', 'Post a Job')

@section('content')

{{-- Header --}}
<div class="flex items-center gap-3 mb-6">
    <a href="{{ route('employer.jobs.index') }}" class="text-gray-400 hover:text-gray-700 transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
        </svg>
    </a>
    <div>
        <h1 class="text-2xl font-extrabold text-gray-900">Post a Job Vacancy</h1>
        <p class="text-sm text-gray-500 mt-0.5">Fill in the details below to publish your job listing.</p>
    </div>
</div>

<div class="max-w-3xl">
    <form method="POST" action="{{ route('employer.jobs.store') }}" enctype="multipart/form-data" class="space-y-6">
        @csrf

        @if ($errors->any())
            <div class="bg-red-50 border border-red-200 text-red-700 rounded-xl px-4 py-3 text-sm">
                <p class="font-semibold mb-1">Please fix the following:</p>
                <ul class="list-disc list-inside space-y-0.5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Job Details --}}
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 space-y-5">
            <h2 class="text-xs font-bold text-gray-400 uppercase tracking-widest">Job Details</h2>

            {{-- Company Logo --}}
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">
                    Company Logo <span class="text-gray-400 font-normal">optional</span>
                </label>
                <div class="flex items-center gap-4">
                    <div id="logo-preview-wrap" class="hidden w-16 h-16 rounded-xl overflow-hidden border border-gray-200 shrink-0">
                        <img id="logo-preview" src="" class="w-full h-full object-cover">
                    </div>
                    <label class="cursor-pointer flex items-center gap-2 px-4 py-3 rounded-xl border border-dashed border-gray-300 hover:border-blue-400 text-sm text-gray-500 hover:text-blue-600 transition">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
                        </svg>
                        <span id="logo-label">Upload logo (PNG, JPG, max 2MB)</span>
                        <input type="file" name="logo" id="logo" accept="image/png,image/jpeg,image/gif,image/webp" class="hidden" onchange="previewLogo(this)">
                    </label>
                </div>
            </div>

            <div>
                <label for="title" class="block text-sm font-semibold text-gray-700 mb-1">
                    Job Title <span class="text-red-500">*</span>
                </label>
                <input type="text" id="title" name="title" value="{{ old('title') }}"
                    placeholder="e.g. Administrative Assistant, Cashier, Welder"
                    class="w-full px-4 py-3 rounded-xl border {{ $errors->has('title') ? 'border-red-400' : 'border-gray-200' }} text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label for="job_type" class="block text-sm font-semibold text-gray-700 mb-1">
                        Employment Type <span class="text-red-500">*</span>
                    </label>
                    <select id="job_type" name="job_type"
                        class="w-full px-4 py-3 rounded-xl border {{ $errors->has('job_type') ? 'border-red-400' : 'border-gray-200' }} text-sm text-gray-700 focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition appearance-none cursor-pointer">
                        <option value="" disabled {{ old('job_type') ? '' : 'selected' }}>Select type</option>
                        @foreach (['Full-time', 'Part-time', 'Contract', 'Casual', 'Seasonal', 'Apprenticeship', 'Internship'] as $type)
                            <option value="{{ $type }}" {{ old('job_type') === $type ? 'selected' : '' }}>{{ $type }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <label for="location" class="block text-sm font-semibold text-gray-700 mb-1">
                        Work Location <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="location" name="location" value="{{ old('location') }}"
                        placeholder="e.g. Manolo Fortich, Bukidnon"
                        class="w-full px-4 py-3 rounded-xl border {{ $errors->has('location') ? 'border-red-400' : 'border-gray-200' }} text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
                </div>

                <div>
                    <label for="slots" class="block text-sm font-semibold text-gray-700 mb-1">
                        No. of Vacancies <span class="text-red-500">*</span>
                    </label>
                    <input type="number" id="slots" name="slots" value="{{ old('slots', 1) }}" min="1"
                        class="w-full px-4 py-3 rounded-xl border {{ $errors->has('slots') ? 'border-red-400' : 'border-gray-200' }} text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition">
                </div>

                <div>
                    <label for="deadline" class="block text-sm font-semibold text-gray-700 mb-1">Application Deadline</label>
                    <input type="date" id="deadline" name="deadline" value="{{ old('deadline') }}"
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm text-gray-700 focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition">
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label for="salary_min" class="block text-sm font-semibold text-gray-700 mb-1">Monthly Salary (Min) <span class="text-gray-400 font-normal">optional</span></label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-400 text-sm font-semibold pointer-events-none">₱</span>
                        <input type="number" id="salary_min" name="salary_min" value="{{ old('salary_min') }}" min="0" step="500"
                            placeholder="e.g. 15000"
                            class="w-full pl-8 pr-4 py-3 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
                    </div>
                </div>
                <div>
                    <label for="salary_max" class="block text-sm font-semibold text-gray-700 mb-1">Monthly Salary (Max) <span class="text-gray-400 font-normal">optional</span></label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-400 text-sm font-semibold pointer-events-none">₱</span>
                        <input type="number" id="salary_max" name="salary_max" value="{{ old('salary_max') }}" min="0" step="500"
                            placeholder="e.g. 25000"
                            class="w-full pl-8 pr-4 py-3 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
                    </div>
                </div>
            </div>
        </div>

        {{-- Description & Requirements --}}
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 space-y-5">
            <h2 class="text-xs font-bold text-gray-400 uppercase tracking-widest">Description & Requirements</h2>

            <div>
                <label for="description" class="block text-sm font-semibold text-gray-700 mb-1">
                    Job Description <span class="text-red-500">*</span>
                </label>
                <textarea id="description" name="description" rows="6"
                    placeholder="Describe the role, responsibilities, and what a typical day looks like..."
                    class="w-full px-4 py-3 rounded-xl border {{ $errors->has('description') ? 'border-red-400' : 'border-gray-200' }} text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400 resize-y">{{ old('description') }}</textarea>
            </div>

            <div>
                <label for="requirements" class="block text-sm font-semibold text-gray-700 mb-1">
                    Qualifications / Requirements <span class="text-gray-400 font-normal">optional</span>
                </label>
                <textarea id="requirements" name="requirements" rows="4"
                    placeholder="e.g. At least high school graduate, with 1 year experience, must be a resident of Manolo Fortich..."
                    class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400 resize-y">{{ old('requirements') }}</textarea>
            </div>
        </div>

        {{-- Actions --}}
        <div class="flex flex-col sm:flex-row gap-3">
            <button type="submit"
                class="flex-1 sm:flex-none inline-flex items-center justify-center gap-2 bg-blue-700 hover:bg-blue-800 text-white font-bold px-8 py-3 rounded-xl transition shadow-sm text-sm">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
                Publish Job Posting
            </button>
            <a href="{{ route('employer.jobs.index') }}"
                class="flex-1 sm:flex-none inline-flex items-center justify-center gap-2 border border-gray-200 text-gray-600 hover:bg-gray-50 font-semibold px-8 py-3 rounded-xl transition text-sm">
                Cancel
            </a>
        </div>

    </form>
</div>

@push('scripts')
<script>
function previewLogo(input) {
    const file = input.files[0];
    if (!file) return;
    if (file.size > 2 * 1024 * 1024) {
        alert('Logo must be 2MB or smaller.');
        input.value = '';
        return;
    }
    const reader = new FileReader();
    reader.onload = function(e) {
        const preview = document.getElementById('logo-preview');
        const wrap = document.getElementById('logo-preview-wrap');
        const label = document.getElementById('logo-label');
        preview.src = e.target.result;
        wrap.classList.remove('hidden');
        label.textContent = file.name;
    };
    reader.readAsDataURL(file);
}
</script>
@endpush

@endsection
