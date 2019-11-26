<?php

/**
 * Seeding for the Member Names table
 * PHP version 7.3.9
 *
 * @category Database_Seeding
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */
use Illuminate\Database\Seeder;

/**
 * Apply seeding for the Member Names table
 *
 * @category Database_Seeding
 * @package  MMS
 * @author   Barry S. Rayfield <barry.rayfield@gmail.com>
 * @license  MIT Licence
 * @link     Not Availavle
 */
class MemberNameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('member_names')->insert(['member_id' => 1400, 'membership_owner' => 1, 'surname_id' => 1, 'first_name' => 'Able', 'last_name' => 'Baker', 'suffix_id' => 2, 'sex' => 'M', 'mens_club' => 1, 'sisterhood' => 0, 'hebrew_school' => 0, 'sunday_school' => 0, 'vip_code_id' => 2, 'email' => 'able.baker@bsrresearch.com', 'created_by_id' => 1, 'last_editted_by_id' => 2, 'created_at' => '2019-09-01 01:00:00', 'updated_at' => '2019-09-02 12:23:00',]);
        DB::table('member_names')->insert(['member_id' => 1400, 'membership_owner' => 0, 'surname_id' => 2, 'first_name' => 'Betsy', 'last_name' => 'Baker', 'suffix_id' => 3, 'sex' => 'F', 'mens_club' => 0, 'sisterhood' => 1, 'hebrew_school' => 0, 'sunday_school' => 0, 'vip_code_id' => 2, 'email' => 'betsy.baker@bsrresearch.com', 'created_by_id' => 2, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 02:00:00', 'updated_at' => '2019-09-02 13:23:00',]);
        DB::table('member_names')->insert(['member_id' => 1400, 'membership_owner' => 0, 'surname_id' => 3, 'first_name' => 'Charlie', 'last_name' => 'Baker', 'suffix_id' => 4, 'sex' => 'M', 'mens_club' => 0, 'sisterhood' => 0, 'hebrew_school' => 1, 'sunday_school' => 0, 'vip_code_id' => 2, 'email' => 'charlie.baker@bsrresearch.com', 'created_by_id' => 3, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 03:00:00', 'updated_at' => '2019-09-02 14:23:00',]);
        DB::table('member_names')->insert(['member_id' => 1400, 'membership_owner' => 0, 'surname_id' => 4, 'first_name' => 'Davida', 'last_name' => 'Baker', 'suffix_id' => 5, 'sex' => 'F', 'mens_club' => 0, 'sisterhood' => 0, 'hebrew_school' => 0, 'sunday_school' => 1, 'vip_code_id' => 2, 'email' => 'davida.baker@bsrresearch.com', 'created_by_id' => 1, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 04:00:00', 'updated_at' => '2019-09-02 15:23:00',]);

        DB::table('member_names')->insert(['member_id' => 1401, 'membership_owner' => 0, 'surname_id' => 5, 'first_name' => 'Edward', 'last_name' => 'Cougar', 'suffix_id' => 2, 'sex' => 'M', 'mens_club' => 1, 'sisterhood' => 0, 'hebrew_school' => 0, 'sunday_school' => 0, 'vip_code_id' => 1, 'email' => 'edward.cougar@bsrresearch.com', 'created_by_id' => 1, 'last_editted_by_id' => 2, 'created_at' => '2019-09-01 01:00:00', 'updated_at' => '2019-09-02 12:23:00',]);
        DB::table('member_names')->insert(['member_id' => 1401, 'membership_owner' => 1, 'surname_id' => 6, 'first_name' => 'Francis', 'last_name' => 'Cougar', 'suffix_id' => 3, 'sex' => 'F', 'mens_club' => 0, 'sisterhood' => 1, 'hebrew_school' => 0, 'sunday_school' => 0, 'vip_code_id' => 2, 'email' => 'francis.cougar@bsrresearch.com', 'created_by_id' => 2, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 02:00:00', 'updated_at' => '2019-09-02 13:23:00',]);
        DB::table('member_names')->insert(['member_id' => 1401, 'membership_owner' => 0, 'surname_id' => 7, 'first_name' => 'George', 'last_name' => 'Cougar', 'suffix_id' => 4, 'sex' => 'M', 'mens_club' => 0, 'sisterhood' => 0, 'hebrew_school' => 1, 'sunday_school' => 0, 'vip_code_id' => 2, 'email' => 'george.couger@bsrresearch.com', 'created_by_id' => 3, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 03:00:00', 'updated_at' => '2019-09-02 14:23:00',]);
        DB::table('member_names')->insert(['member_id' => 1401, 'membership_owner' => 0, 'surname_id' => 8, 'first_name' => 'Hetty', 'last_name' => 'Cougar', 'suffix_id' => 5, 'sex' => 'F', 'mens_club' => 0, 'sisterhood' => 0, 'hebrew_school' => 0, 'sunday_school' => 1, 'vip_code_id' => 2, 'email' => 'hetty.cougar@bsrresearch.com', 'created_by_id' => 1, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 04:00:00', 'updated_at' => '2019-09-02 15:23:00',]);

        DB::table('member_names')->insert(['member_id' => 1402, 'membership_owner' => 1, 'surname_id' => 9, 'first_name' => 'Ira', 'last_name' => 'Dancer', 'suffix_id' => 2, 'sex' => 'M', 'mens_club' => 1, 'sisterhood' => 0, 'hebrew_school' => 0, 'sunday_school' => 0, 'vip_code_id' => 2, 'email' => 'ira.dancer@bsrresearch.com', 'created_by_id' => 1, 'last_editted_by_id' => 2, 'created_at' => '2019-09-01 01:00:00', 'updated_at' => '2019-09-02 12:23:00',]);
        DB::table('member_names')->insert(['member_id' => 1402, 'membership_owner' => 0, 'surname_id' => 10, 'first_name' => 'Jackie', 'last_name' => 'Dancer', 'suffix_id' => 3, 'sex' => 'F', 'mens_club' => 0, 'sisterhood' => 1, 'hebrew_school' => 0, 'sunday_school' => 0, 'vip_code_id' => 3, 'email' => 'jackie.dancer@bsrresearch.com', 'created_by_id' => 2, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 02:00:00', 'updated_at' => '2019-09-02 13:23:00',]);
        DB::table('member_names')->insert(['member_id' => 1402, 'membership_owner' => 0, 'surname_id' => 11, 'first_name' => 'Keith', 'last_name' => 'Dancer', 'suffix_id' => 4, 'sex' => 'M', 'mens_club' => 0, 'sisterhood' => 0, 'hebrew_school' => 1, 'sunday_school' => 0, 'vip_code_id' => 2, 'email' => 'keith.dancer@bsrresearch.com', 'created_by_id' => 3, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 03:00:00', 'updated_at' => '2019-09-02 14:23:00',]);
        DB::table('member_names')->insert(['member_id' => 1402, 'membership_owner' => 0, 'surname_id' => 12, 'first_name' => 'Lana', 'last_name' => 'Dancer', 'suffix_id' => 5, 'sex' => 'F', 'mens_club' => 0, 'sisterhood' => 0, 'hebrew_school' => 0, 'sunday_school' => 1, 'vip_code_id' => 2, 'email' => 'lana.dancer@bsrresearch.com', 'created_by_id' => 1, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 04:00:00', 'updated_at' => '2019-09-02 15:23:00',]);

        DB::table('member_names')->insert(['member_id' => 1403, 'membership_owner' => 0, 'surname_id' => 13, 'first_name' => 'Mike', 'last_name' => 'Echo', 'suffix_id' => 2, 'sex' => 'M', 'mens_club' => 1, 'sisterhood' => 0, 'hebrew_school' => 0, 'sunday_school' => 0, 'vip_code_id' => 4, 'email' => 'mike.echo@bsrresearch.com', 'created_by_id' => 1, 'last_editted_by_id' => 2, 'created_at' => '2019-09-01 01:00:00', 'updated_at' => '2019-09-02 12:23:00',]);
        DB::table('member_names')->insert(['member_id' => 1403, 'membership_owner' => 1, 'surname_id' => 14, 'first_name' => 'Nona', 'last_name' => 'Echo', 'suffix_id' => 3, 'sex' => 'F', 'mens_club' => 0, 'sisterhood' => 1, 'hebrew_school' => 0, 'sunday_school' => 0, 'vip_code_id' => 2, 'email' => 'nona.echo@bsrresearch.com', 'created_by_id' => 2, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 02:00:00', 'updated_at' => '2019-09-02 13:23:00',]);
        DB::table('member_names')->insert(['member_id' => 1403, 'membership_owner' => 0, 'surname_id' => 15, 'first_name' => 'Oscar', 'last_name' => 'Echo', 'suffix_id' => 4, 'sex' => 'M', 'mens_club' => 0, 'sisterhood' => 0, 'hebrew_school' => 1, 'sunday_school' => 0, 'vip_code_id' => 2, 'email' => 'oscar.echo@bsrresearch.com', 'created_by_id' => 3, 'last_editted_by_id' => 1, 'created_at' => '2019-09-01 03:00:00', 'updated_at' => '2019-09-02 14:23:00',]);
        DB::table('member_names')->insert(['member_id' => 1403, 'membership_owner' => 0, 'surname_id' => 16, 'first_name' => 'Paula', 'last_name' => 'Echo', 'suffix_id' => 5, 'sex' => 'F', 'mens_club' => 0, 'sisterhood' => 0, 'hebrew_school' => 0, 'sunday_school' => 1, 'vip_code_id' => 2, 'email' => 'paula.echo@bsrresearch.com', 'created_by_id' => 1, 'last_editted_by_id' => 3, 'created_at' => '2019-09-01 04:00:00', 'updated_at' => '2019-09-02 15:23:00',]);
    }
}
