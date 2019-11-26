<?php

use Illuminate\Database\Seeder;
use App\Section;

class SectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $section = new Section();
        $section->page = 'home';
        $section->title = 'Our Mission';
        $section->Description = 'Our Mission Section';
        $section->text = 'Our passion and Commitment to the industry from Property owners to tenants makes us stand out from the rest! Be assured that your property will be managed with experience professionals that value your investments. Let us help you simplify your property’s day to day operations or a project as needed. We specialize in Single family homes, Townhouses, Condos, & Multifamily. Contact Us Today!';
        $section->section_id = 1;
        $section->save();

        $section = new Section();
        $section->page = 'home';
        $section->title = 'Let us do the hard work';
        $section->Description = 'Additional Section-1';
        $section->text = 'Our approach is simple. Real Property Management offices provide professional, trustworthy property management services, from tenant screening to leasing to maintenance to evictions. Whether you are an investor with several rental homes or an unintentional landlord, your local office has your solution.';
        $section->section_id = 2;
        $section->save();

        $section = new Section();
        $section->page = 'home';
        $section->title = 'Profit without the hassle';
        $section->Description = 'Additional Section-2';
        $section->text = 'Owning rental homes can be costly. The right property management company can make all the difference. For over 30 years, thousands of rental property owners and investors nationwide have trusted Real Property Management offices to take care of their rental property.';
        $section->section_id = 3;
        $section->save();

        $section = new Section();
        $section->page = 'about';
        $section->title = 'about us';
        $section->Description = 'About Us Section';
        $section->text = 'Based out of the San Gabriel Valley and 15 years in California Property Management business, we continue thrive in the dynamic fast paced housing market. Our expertise and knowledge for any changes, updates in our management business is consistently achieved. At Home Visions Property Management we understand your hard work investments. We dedicate ourselves in providing highest quality housing.';
        $section->section_id = 4;
        $section->save();

    }
}
