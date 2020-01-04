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
        $section->text = 'Our passion and Commitment to the industry from Property owners to tenants makes us stand out from the rest. Be assured that your property will be managed with experience professionals that value your investments. Let us help you simplify your property’s day to day operations or we can also help as you go with projects as needed. We specialize in Single family homes, Townhouses, Condos, & Multifamily. Contact Us Today!';
        $section->section_id = 1;
        $section->save();

        $section = new Section();
        $section->page = 'home';
        $section->title = 'Let us do the hard work';
        $section->Description = 'Additional Section-1';
        $section->text = 'Our approach is simple. We provide professional, trustworthy property management services, from tenant screening to leasing to resident retention. Whether you are an investor with several rentals or a single home landlord, we have your solution.';
        $section->section_id = 2;
        $section->save();

        $section = new Section();
        $section->page = 'home';
        $section->title = 'Profit without the hassle';
        $section->Description = 'Additional Section-2';
        $section->text = 'Owning rental homes can be challenging and costly. The right property management company can make all the difference. Home Vision Property Management is here to to help. Contact us today!';
        $section->section_id = 3;
        $section->save();

        $section = new Section();
        $section->page = 'about';
        $section->title = 'about us';
        $section->Description = 'About Us Section';
        $section->text = 'Based out of the San Gabriel Valley and 15 years in California Property Management business, we continue thrive in the dynamic fast paced housing market. Our expertise and knowledge for any changes, updates in our management business is consistently achieved. At Home Visions Property Management we understand your hard work investments. We dedicate ourselves in providing highest quality housing.';
        $section->section_id = 4;
        $section->save();

        $section = new Section();
        $section->page = 'property_management';
        $section->title = 'Services Overview';
        $section->Description = 'Main Services Section';
        $section->text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        $section->section_id = 5;
        $section->save();

        $section = new Section();
        $section->page = 'property_management';
        $section->title = 'san gabriel valley property management';
        $section->Description = 'Additional Services Section-1';
        $section->text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        $section->section_id = 6;
        $section->save();
    }
}
