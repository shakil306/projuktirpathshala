<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AltColumnAdd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('welcome_slides', function (Blueprint $table) {
            $table->string('alt')->nullable()->after('image');
        });
        Schema::table('welcomes', function (Blueprint $table) {
            $table->string('alt')->nullable()->after('image');
        });
        Schema::table('courses', function (Blueprint $table) {
            $table->string('alt')->nullable()->after('image');
        });
        Schema::table('future_leaders', function (Blueprint $table) {
            $table->string('alt')->nullable()->after('image');
        });
        Schema::table('batches', function (Blueprint $table) {
            $table->string('alt')->nullable()->after('image');
        });
        Schema::table('success_students', function (Blueprint $table) {
            $table->string('alt')->nullable()->after('image');
        });
        Schema::table('career_counselings', function (Blueprint $table) {
            $table->string('alt')->nullable()->after('image');
        });
        Schema::table('abouts', function (Blueprint $table) {
            $table->string('alt')->nullable()->after('image');
        });
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('alt')->nullable()->after('image');
        });
        Schema::table('departments', function (Blueprint $table) {
            $table->string('alt')->nullable()->after('image');
        });
        Schema::table('events', function (Blueprint $table) {
            $table->string('alt')->nullable()->after('image');
        });
        Schema::table('galleries', function (Blueprint $table) {
            $table->string('alt')->nullable()->after('image');
        });
        Schema::table('gallery_tops', function (Blueprint $table) {
            $table->string('alt')->nullable()->after('image');
        });
        Schema::table('logos', function (Blueprint $table) {
            $table->string('alt')->nullable()->after('logo');
        });
        Schema::table('mentors', function (Blueprint $table) {
            $table->string('alt')->nullable()->after('profile_image');
        });
        Schema::table('our_sister_concerns', function (Blueprint $table) {
            $table->string('alt')->nullable()->after('logo');
        });
        Schema::table('partners', function (Blueprint $table) {
            $table->string('alt')->nullable()->after('image');
        });
        Schema::table('sliders', function (Blueprint $table) {
            $table->string('alt')->nullable()->after('image');
        });
        Schema::table('social_activities', function (Blueprint $table) {
            $table->string('alt')->nullable()->after('image');
        });
        Schema::table('social_covers', function (Blueprint $table) {
            $table->string('alt')->nullable()->after('image');
        });
        Schema::table('student_feedbacks', function (Blueprint $table) {
            $table->string('alt')->nullable()->after('image');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->string('alt')->nullable()->after('profile_image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('welcome_slides', function (Blueprint $table) {
            $table->dropColumn('alt');
        });
        Schema::table('welcomes', function (Blueprint $table) {
            $table->dropColumn('alt');
        });
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn('alt');
        });
        Schema::table('future_leaders', function (Blueprint $table) {
            $table->dropColumn('alt');
        });
        Schema::table('batches', function (Blueprint $table) {
            $table->dropColumn('alt');
        });
        Schema::table('success_students', function (Blueprint $table) {
            $table->dropColumn('alt');
        });
        Schema::table('career_counselings', function (Blueprint $table) {
            $table->dropColumn('alt');
        });
        Schema::table('abouts', function (Blueprint $table) {
            $table->dropColumn('alt');
        });
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn('alt');
        });
        Schema::table('departments', function (Blueprint $table) {
            $table->dropColumn('alt');
        });
        Schema::table('events', function (Blueprint $table) {
            $table->dropColumn('alt');
        });
        Schema::table('galleries', function (Blueprint $table) {
            $table->dropColumn('alt');
        });
        Schema::table('gallery_tops', function (Blueprint $table) {
            $table->dropColumn('alt');
        });
        Schema::table('logos', function (Blueprint $table) {
            $table->dropColumn('alt');
        });
        Schema::table('mentors', function (Blueprint $table) {
            $table->dropColumn('alt');
        });
        Schema::table('our_sister_concerns', function (Blueprint $table) {
            $table->dropColumn('alt');
        });
        Schema::table('partners', function (Blueprint $table) {
            $table->dropColumn('alt');
        });
        Schema::table('sliders', function (Blueprint $table) {
            $table->dropColumn('alt');
        });
        Schema::table('social_activities', function (Blueprint $table) {
            $table->dropColumn('alt');
        });
        Schema::table('social_covers', function (Blueprint $table) {
            $table->dropColumn('alt');
        });
        Schema::table('student_feedbacks', function (Blueprint $table) {
            $table->dropColumn('alt');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('alt');
        });
    }
}
