@extends('layouts.employer')

@section('title', 'Post a Job Vacancy')

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
        <p class="text-sm text-gray-500 mt-0.5">PESO Manolo Fortich — Job Vacancy Form</p>
    </div>
</div>

<div class="max-w-3xl">
    <form method="POST" action="{{ route('employer.jobs.store') }}" enctype="multipart/form-data" class="space-y-5">
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

        {{-- ══════════════════════════════════════════════════════════════
             III. VACANCY DETAILS
        ══════════════════════════════════════════════════════════════ --}}
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
            {{-- Section header --}}
            <div class="bg-blue-700 px-5 py-2.5 flex items-center gap-2">
                <span class="text-white font-bold text-sm uppercase tracking-wide">Vacancy Details</span>
            </div>

            <div class="p-5 space-y-4">

                {{-- Position Title --}}
                <div>
                    <label for="title" class="block text-sm font-semibold text-gray-700 mb-1">Position Title <span class="text-red-500">*</span></label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}"
                        placeholder="e.g. Administrative Assistant, Cashier, Welder"
                        class="w-full px-4 py-2.5 rounded-xl border {{ $errors->has('title') ? 'border-red-400' : 'border-gray-200' }} text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
                </div>

                {{-- Job Description --}}
                <div>
                    <label for="description" class="block text-sm font-semibold text-gray-700 mb-1">Job Description <span class="text-red-500">*</span></label>
                    <textarea id="description" name="description" rows="4"
                        placeholder="Duties and responsibilities of the position..."
                        class="w-full px-4 py-2.5 rounded-xl border {{ $errors->has('description') ? 'border-red-400' : 'border-gray-200' }} text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400 resize-y">{{ old('description') }}</textarea>
                </div>

                {{-- Nature of Work --}}
                <div>
                    <p class="text-sm font-semibold text-gray-700 mb-2">Nature of Work <span class="text-red-500">*</span></p>
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-x-6 gap-y-2">
                        @foreach ([
                            'Permanent'                   => 'Permanent',
                            'Contractual'                 => 'Contractual',
                            'Project-based'               => 'Project-based',
                            'Internship/OJT'              => 'Internship / OJT',
                            'Part-time'                   => 'Part-time',
                            'Work from home/online job'   => 'Work from home / online job',
                        ] as $val => $label)
                        <label class="flex items-center gap-2 text-sm text-gray-600 cursor-pointer">
                            <input type="checkbox" name="nature_of_work[]" value="{{ $val }}"
                                {{ in_array($val, old('nature_of_work', [])) ? 'checked' : '' }}
                                class="w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                            {{ $label }}
                        </label>
                        @endforeach
                    </div>
                </div>

                {{-- Place of Work / Salary / Vacancy Count --}}
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="sm:col-span-1">
                        <label for="location" class="block text-sm font-semibold text-gray-700 mb-1">Place of Work <span class="text-red-500">*</span></label>
                        <input type="text" id="location" name="location" value="{{ old('location') }}"
                            placeholder="e.g. Manolo Fortich, Bukidnon"
                            class="w-full px-4 py-2.5 rounded-xl border {{ $errors->has('location') ? 'border-red-400' : 'border-gray-200' }} text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
                    </div>
                    <div>
                        <label for="salary" class="block text-sm font-semibold text-gray-700 mb-1">Salary <span class="text-gray-400 font-normal text-xs">optional</span></label>
                        <input type="text" id="salary" name="salary" value="{{ old('salary') }}"
                            placeholder="e.g. ₱15,000 / month"
                            class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
                    </div>
                    <div>
                        <label for="slots" class="block text-sm font-semibold text-gray-700 mb-1">Vacancy Count <span class="text-red-500">*</span></label>
                        <input type="number" id="slots" name="slots" value="{{ old('slots', 1) }}" min="1"
                            class="w-full px-4 py-2.5 rounded-xl border {{ $errors->has('slots') ? 'border-red-400' : 'border-gray-200' }} text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition">
                    </div>
                </div>

            </div>
        </div>

        {{-- ══════════════════════════════════════════════════════════════
             IV. QUALIFICATION REQUIREMENTS
        ══════════════════════════════════════════════════════════════ --}}
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
            <div class="bg-blue-700 px-5 py-2.5 flex items-center gap-2">
                
                <span class="text-white font-bold text-sm uppercase tracking-wide">Qualification Requirements</span>
            </div>

            <div class="p-5 space-y-4">

                {{-- Work Experience --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="work_experience" class="block text-sm font-semibold text-gray-700 mb-1">Work Experience (month/s) <span class="text-gray-400 font-normal text-xs">optional</span></label>
                        <input type="text" id="work_experience" name="work_experience" value="{{ old('work_experience') }}"
                            placeholder="e.g. 6 months, 2 years"
                            class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
                    </div>
                    <div>
                        <label for="requirements" class="block text-sm font-semibold text-gray-700 mb-1">Other Qualifications <span class="text-gray-400 font-normal text-xs">optional</span></label>
                        <input type="text" id="requirements" name="requirements" value="{{ old('requirements') }}"
                            placeholder="e.g. With NCII, driver's license"
                            class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
                    </div>
                </div>

                {{-- Accepts PWD --}}
                <div class="border border-gray-100 rounded-xl p-4 space-y-3">
                    <div class="flex flex-wrap items-center gap-6">
                        <p class="text-sm font-semibold text-gray-700">Accepts persons with disabilities (PWD)?</p>
                        <div class="flex gap-4">
                            <label class="flex items-center gap-1.5 text-sm text-gray-600 cursor-pointer">
                                <input type="radio" name="accepts_pwd" value="yes" {{ old('accepts_pwd') === 'yes' ? 'checked' : '' }}
                                    onclick="document.getElementById('pwd-types').classList.remove('hidden')"
                                    class="text-blue-600 focus:ring-blue-500"> Yes
                            </label>
                            <label class="flex items-center gap-1.5 text-sm text-gray-600 cursor-pointer">
                                <input type="radio" name="accepts_pwd" value="no" {{ old('accepts_pwd', 'no') === 'no' ? 'checked' : '' }}
                                    onclick="document.getElementById('pwd-types').classList.add('hidden')"
                                    class="text-blue-600 focus:ring-blue-500"> No
                            </label>
                        </div>
                    </div>
                    <div id="pwd-types" class="{{ old('accepts_pwd') === 'yes' ? '' : 'hidden' }} space-y-2">
                        <p class="text-xs text-gray-500 font-medium">If "yes", specify type of disability:</p>
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-x-6 gap-y-2">
                            @foreach (['Visual', 'Hearing', 'Speech', 'Physical', 'Mental'] as $dtype)
                            <label class="flex items-center gap-2 text-sm text-gray-600 cursor-pointer">
                                <input type="checkbox" name="pwd_types[]" value="{{ $dtype }}"
                                    {{ in_array($dtype, old('pwd_types', [])) ? 'checked' : '' }}
                                    class="w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                {{ $dtype }}
                            </label>
                            @endforeach
                            <div class="sm:col-span-3 flex items-center gap-2">
                                <label class="flex items-center gap-2 text-sm text-gray-600 cursor-pointer shrink-0">
                                    <input type="checkbox" name="pwd_types[]" value="Others"
                                        {{ in_array('Others', old('pwd_types', [])) ? 'checked' : '' }}
                                        class="w-4 h-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                                    Others (please specify):
                                </label>
                                <input type="text" name="pwd_other" value="{{ old('pwd_other') }}"
                                    class="flex-1 border-b border-gray-300 text-sm focus:outline-none focus:border-blue-500 py-0.5 bg-transparent placeholder:text-gray-400"
                                    placeholder="specify disability">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Accepts OFW --}}
                <div class="flex flex-wrap items-center gap-6">
                    <p class="text-sm font-semibold text-gray-700">Accepts returning OFWs?</p>
                    <div class="flex gap-4">
                        <label class="flex items-center gap-1.5 text-sm text-gray-600 cursor-pointer">
                            <input type="radio" name="accepts_ofw" value="yes" {{ old('accepts_ofw') === 'yes' ? 'checked' : '' }}
                                class="text-blue-600 focus:ring-blue-500"> Yes
                        </label>
                        <label class="flex items-center gap-1.5 text-sm text-gray-600 cursor-pointer">
                            <input type="radio" name="accepts_ofw" value="no" {{ old('accepts_ofw', 'no') === 'no' ? 'checked' : '' }}
                                class="text-blue-600 focus:ring-blue-500"> No
                        </label>
                    </div>
                </div>

                {{-- Educational Level / Course --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="educational_level" class="block text-sm font-semibold text-gray-700 mb-1">Educational Level <span class="text-gray-400 font-normal text-xs">optional</span></label>
                        <select id="educational_level" name="educational_level"
                            class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-sm text-gray-700 focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition appearance-none cursor-pointer">
                            <option value="">-- Select --</option>
                            @foreach (['Elementary Graduate', 'High School Graduate', 'Senior High School Graduate', 'Vocational / TESDA', 'College Level', 'College Graduate', 'Post Graduate'] as $edu)
                                <option value="{{ $edu }}" {{ old('educational_level') === $edu ? 'selected' : '' }}>{{ $edu }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="course_strand" class="block text-sm font-semibold text-gray-700 mb-1">Course / SHS Strand <span class="text-gray-400 font-normal text-xs">optional</span></label>
                        <input type="text" id="course_strand" name="course_strand" value="{{ old('course_strand') }}"
                            placeholder="e.g. BS Accountancy, STEM, HUMSS"
                            class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
                    </div>
                </div>

                {{-- Eligibility / Language --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="eligibility" class="block text-sm font-semibold text-gray-700 mb-1">Eligibility <span class="text-gray-400 font-normal text-xs">optional</span></label>
                        <input type="text" id="eligibility" name="eligibility" value="{{ old('eligibility') }}"
                            placeholder="e.g. PRC Board Passer, CSE"
                            class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
                    </div>
                    <div>
                        <label for="language_dialect" class="block text-sm font-semibold text-gray-700 mb-1">Language / Dialect Spoken <span class="text-gray-400 font-normal text-xs">optional</span></label>
                        <input type="text" id="language_dialect" name="language_dialect" value="{{ old('language_dialect') }}"
                            placeholder="e.g. English, Filipino, Bisaya"
                            class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
                    </div>
                </div>

                {{-- License / Certification --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="license" class="block text-sm font-semibold text-gray-700 mb-1">License <span class="text-gray-400 font-normal text-xs">optional</span></label>
                        <input type="text" id="license" name="license" value="{{ old('license') }}"
                            placeholder="e.g. Driver's License, PRC License"
                            class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
                    </div>
                    <div>
                        <label for="certification" class="block text-sm font-semibold text-gray-700 mb-1">Certification <span class="text-gray-400 font-normal text-xs">optional</span></label>
                        <input type="text" id="certification" name="certification" value="{{ old('certification') }}"
                            placeholder="e.g. NCII, ISO Certified"
                            class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-sm focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition placeholder:text-gray-400">
                    </div>
                </div>

            </div>
        </div>

        {{-- ══════════════════════════════════════════════════════════════
             V. POSTING DETAILS
        ══════════════════════════════════════════════════════════════ --}}
        <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
            <div class="bg-blue-700 px-5 py-2.5 flex items-center gap-2">
                <span class="text-white font-bold text-sm uppercase tracking-wide">Posting Details</span>
            </div>

            <div class="p-5">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap 4">
                    <div>
                        <label for="posting_date" class="block text-sm font-semibold text-gray-700 mb-1">Posting Date</label>
                        <input type="date" id="posting_date" name="posting_date" value="{{ old('posting_date', date('Y-m-d')) }}"
                            class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-sm text-gray-700 focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition">
                    </div>
                    <div>
                        <label for="deadline" class="block text-sm font-semibold text-gray-700 mb-1">Valid Until <span class="text-gray-400 font-normal text-xs">optional</span></label>
                        <input type="date" id="deadline" name="deadline" value="{{ old('deadline') }}"
                            class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-sm text-gray-700 focus:outline-none focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 transition">
                    </div>
                </div>
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
        document.getElementById('logo-preview').src = e.target.result;
        document.getElementById('logo-preview-wrap').classList.remove('hidden');
        document.getElementById('logo-label').textContent = file.name;
    };
    reader.readAsDataURL(file);
}
</script>
@endpush

@endsection
