<x-layout>
    <div class="pt-6 space-y-10">
        <section class="text-center">
            <h1 class="text-4xl font-bold">Let's Find Your Next Job</h1>
            {{-- <form action="" class="mt-6">
                <input type="text" name="" id="" placeholder="Web Developer...."
                    class="w-full max-w-xl px-5 py-4 rounded-xl bg-white/5 border-white/10">
            </form> --}}
            <x-forms.form action="/search" class="mt-6">
                <x-forms.input :label="false" name="q" placeholder="Web Developer...." />
            </x-forms.form>
        </section>
        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid gap-8 mt-6 lg:grid-cols-3">
                @foreach ($featuredJobs as $job)
                    <x-job-card :$job />
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                @foreach ($tags as $tag)
                    {{-- <x-tag :tag="$tag" /> --}}
                    <x-tag :$tag />
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach ($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
