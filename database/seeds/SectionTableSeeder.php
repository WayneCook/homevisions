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
        $section->text = 'Our services range upon customers diverse needs. Whether you need various services or just a one time project we are here to help you. Our expertise in leasing and getting you the right candidates for rentals will have your returns made easy. No stress!';
        $section->section_id = 5;
        $section->save();

        $section = new Section();
        $section->page = 'property_management';
        $section->title = 'California Law';
        $section->Description = 'Additional Services Section-1';
        $section->text = 'We are experienced in all fields and practices of fair housing laws and regulations. New laws and practices are always our top priority, Homevision superior practice and knowledgement in all management aspects, we reassure you peace of mind.';
        $section->section_id = 6;
        $section->save();
    }
}
