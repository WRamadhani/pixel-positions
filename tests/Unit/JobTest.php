<?php

// test('it belongs to an employer', function () {
//     expect(true)->toBeTrue();
// });

it('belongs to an employer', function () {
    expect(true)->toBeTrue();
    // AAA

    // Arrange
    $employer = \App\Models\Employer::factory()->create();

    $job = \App\Models\Job::factory()->create([
        'employer_id' => $employer->id
    ]);

    // Act
    expect($job->employer->is($employer))->toBeTrue();

    // Assert
});

it('can have tags', function () {
    $job = \App\Models\Job::factory()->create();

    $job->tag('Frontend');

    expect($job->tags)->toHaveCount(1);
});
