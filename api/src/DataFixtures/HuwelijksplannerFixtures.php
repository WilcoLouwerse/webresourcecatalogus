<?php

namespace App\DataFixtures;

use App\Entity\Organization;
use App\Entity\Style;
use App\Entity\Application;
use App\Entity\Page;
use App\Entity\Slug;
use App\Entity\Template;
use App\Entity\Image;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Ramsey\Uuid\Uuid;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class HuwelijksplannerFixtures extends Fixture
{
	private $params;

	public function __construct(ParameterBagInterface $params)
	{
		$this->params = $params;
	}

    public function load(ObjectManager $manager)
    {
    	// Lets make sure we only run these fixtures on huwelijksplanner enviroments
    	if(!in_array("huwelijksplanner.online",$this->params->get('app_domains'))){
    		return false;
    	}

    	// Deze organisaties worden ook buiten het wrc gebruikt
    	// Utrecht
    	$id = Uuid::fromString('68b64145-0740-46df-a65a-9d3259c2fec8');
    	$utrecht = new Organization();
    	$utrecht->setName('Utrecht');
    	$utrecht->setDescription('Gemeente Utrecht');
    	$utrecht->setRsin('002220647');
    	$utrecht->setContact('https://cc.huwelijksplanner.online/organizations/95c3da92-b7d3-4ea0-b6d4-3bc24944e622');
    	$manager->persist($utrecht);
    	$utrecht->setId($id);
    	$manager->persist($utrecht);
    	$manager->flush();
    	$utrecht= $manager->getRepository('App:Organization')->findOneBy(['id'=> $id]);

    	$favicon = new Image();
    	$favicon->setName('VNG Favicon');
    	$favicon->setDescription('Favicon VNG');
    	$favicon->setOrganization($utrecht);

    	$logo = new Image();
    	$logo->setName('VNG Logo');
    	$logo->setDescription('Logo VNG');
    	$logo->setOrganization($utrecht);

    	$style = new Style();
    	$style->setName('Utrecht');
    	$style->setDescription('Huistlijl Gemeente Utrecht');
    	$style->setCss('');
    	$style->setfavicon($favicon);
    	$style->setOrganization($utrecht);

    	$utrecht->setLogo($logo);

    	$manager->persist($utrecht);
    	$manager->persist($favicon);
    	$manager->persist($logo);
    	$manager->persist($style);

    	$manager->flush();

    	// Rotterdam
    	$id = Uuid::fromString('caf824b3-436a-471c-a703-629cf84ca00d');
    	$rotterdam= new Organization();
    	$rotterdam->setName('Rotterdam');
    	$rotterdam->setDescription('Gemeente Rotterdam');
    	$rotterdam->setRsin('');
    	$manager->persist($rotterdam);
    	$rotterdam->setId($id);
    	$manager->persist($rotterdam);
    	$manager->flush();
    	$rotterdam= $manager->getRepository('App:Organization')->findOneBy(['id'=> $id]);

    	$favicon = new Image();
    	$favicon->setName('VNG Favicon');
    	$favicon->setDescription('Favicon VNG');
    	$favicon->setOrganization($rotterdam);

    	$logo = new Image();
    	$logo->setName('VNG Logo');
    	$logo->setDescription('Logo VNG');
    	$logo->setOrganization($rotterdam);

    	$style = new Style();
    	$style->setName('Utrecht');
    	$style->setDescription('Huistlijl Gemeente Utrecht');
    	$style->setCss('');
    	$style->setfavicon($favicon);
    	$style->setOrganization($rotterdam);

    	$rotterdam->setLogo($logo);

    	$manager->persist($rotterdam);
    	$manager->persist($favicon);
    	$manager->persist($logo);
    	$manager->persist($style);

    	$manager->flush();

    	// VNG
    	$id = Uuid::fromString('26f9657d-b5c7-44a6-b33f-596b657c1bde');
    	$organization= new Organization();
    	$organization->setName('VNG');
    	$organization->setDescription('Vereniging Nederlandse Gemeenten');
    	$organization->setRsin('0000');
    	$manager->persist($organization);
    	$organization->setId($id);
    	$manager->persist($organization);
    	$manager->flush();
    	$organization= $manager->getRepository('App:Organization')->findOneBy(['id'=> $id]);


    	// s-Hertogenbosch
    	$id = Uuid::fromString('fed9339e-57d5-4f63-ab68-694759705c19');
    	$organization= new Organization();
    	$organization->setName('\'s-Hertogenbosch');
    	$organization->setDescription('Gemeente \'s-Hertogenbosch');
    	$organization->setRsin('001709124');
    	$manager->persist($organization);
    	$organization->setId($id);
    	$manager->persist($organization);
    	$manager->flush();
    	$organization= $manager->getRepository('App:Organization')->findOneBy(['id'=> $id]);

    	// Eindhoven
    	$id = Uuid::fromString('1802c00b-c3d9-46a5-848c-5846bca29345');
    	$eindhoven= new Organization();
    	$eindhoven->setName('Eindhoven');
    	$eindhoven->setDescription('Gemeente Eindhoven');
    	$eindhoven->setRsin('001902763');
    	$manager->persist($organization);
    	$organization->setId($id);
    	$manager->persist($organization);
    	$manager->flush();
    	$organization= $manager->getRepository('App:Organization')->findOneBy(['id'=> $id]);

    	$favicon = new Image();
    	$favicon->setName('Gemeente Eindhoven Favicon');
    	$favicon->setDescription('Favicon Gemeente Eindhoven');
    	$favicon->setOrganization($eindhoven);

    	$logo = new Image();
    	$logo->setName('Gemeente Eindhoven Logo');
    	$logo->setDescription('Logo Gemeente Eindhoven');
    	$logo->setOrganization($eindhoven);

    	$style = new Style();
    	$style->setName('Gemeente Eindhoven');
    	$style->setDescription('Huistlijl Gemeente Eindhoven');
    	$style->setCss('');
    	$style->setfavicon($favicon);
    	$style->setOrganization($eindhoven);

    	$eindhoven->setLogo($logo);

    	$manager->persist($eindhoven);
    	$manager->persist($favicon);
    	$manager->persist($logo);
    	$manager->persist($style);

    	$manager->flush();

    	// VNG
    	$vng = new Organization();
    	$vng->setName('VNG');
    	$vng->setDescription('Vereniging Nederlandse Gemeente');
    	$vng->setRsin('');
    	$manager->persist($vng);

    	$favicon = new Image();
    	$favicon->setName('VNG Favicon');
    	$favicon->setDescription('Favicon VNG');
    	$favicon->setOrganization($vng);

    	$logo = new Image();
    	$logo->setName('VNG Logo');
    	$logo->setDescription('Logo VNG');
    	$logo->setOrganization($vng);

    	$style = new Style();
    	$style->setName('Utrecht');
    	$style->setDescription('Huistlijl Gemeente Utrecht');
    	$style->setCss('');
    	$style->setfavicon($favicon);
    	$style->setOrganization($vng);

    	$vng->setLogo($logo);

    	$manager->persist($vng);
    	$manager->persist($favicon);
    	$manager->persist($logo);
    	$manager->persist($style);

    	$manager->flush();

        // Home
        $application = new Application();
        $application->setName('MijnApp');
        $application->setDescription('MijnApp');
        $application->setDomain('huwelijksplanner.online');
        $application->setOrganization($eindhoven);
        $manager->persist($application);

        // Home
        $id = Uuid::fromString('536bfb73-63a5-4719-b535-d835607b88b2');
        $application = new Application();
        $application->setName('Huwelijksplanner');
        $application->setDescription('Huwelijksplanner');
        $application->setDomain('huwelijksplanner.online');
        $application->setOrganization($utrecht);
        $manager->persist($application);
        $application->setId($id);
        $manager->persist($application);
        $manager->flush();
        $application = $manager->getRepository('App:Application')->findOneBy(['id'=> $id]);

        // Berichten

        $id = Uuid::fromString('c20cc285-0246-4bf8-b3d0-781543b03270');
        $template = new Template();
        $template->setName('Bevestiging Melding');
        $template->setDescription('Bericht dat het verzoek ontvangen is');
        $template->setContent('Wij hebben uw verzoek ontvangen');
        $template->setTemplateEngine('twig');
        $manager->persist($template);
        $template->setId($id);
        $manager->persist($template);
        $manager->flush();

        $id = Uuid::fromString('b93e6cdf-ed0c-49e7-9975-e6b31f3ebed2');
        $template = new Template();
        $template->setName('Aanvraag ontvangen');
        $template->setDescription('Bericht dat het verzoek ontvangen is');
        $template->setContent('Uw aanvraag is ontvangen en word zo spoedig mogelijk beoordeeld. U ontvangt uiterlijk over (x dagen, tijd, etc) een bevestiging van uw reservering.');
        $template->setTemplateEngine('twig');
        $manager->persist($template);
        $template->setId($id);
        $manager->persist($template);
        $manager->flush();

        $id = Uuid::fromString('e773b161-3636-45a1-8fc2-dd0d4140a9f9');
        $template = new Template();
        $template->setName('Bevestiging aanvraag');
        $template->setDescription('Bericht dat het verzoek ontvangen is');
        $template->setContent('Bevestiging van de daadwerkelijke datum, tijd, locatie, babs etc.');
        $template->setTemplateEngine('twig');
        $manager->persist($template);
        $template->setId($id);
        $manager->persist($template);
        $manager->flush();

        $id = Uuid::fromString('2d56603e-65b3-4b17-81f7-d88ac8bb4e7f');
        $template = new Template();
        $template->setName('Uitgenodigd');
        $template->setDescription('Bericht dat een persoon/organisatie uitgenodigd is');
        $template->setContent('U bent uitgenodigd als {{ role }}, klik op deze link om te bevestigen');
        $template->setTemplateEngine('twig');
        $manager->persist($template);
        $template->setId($id);
        $manager->persist($template);
        $manager->flush();

        $id = Uuid::fromString('a36433e4-3c9b-4df5-bf85-1a80bd2ae2ce');
        $template = new Template();
        $template->setName('Aanvraag');
        $template->setDescription('Bericht dat er een aanvraag is');
        $template->setContent('Er is een aanvraag voor u als trouw ambtenaar, kijk op uw dashboard om deze te acepteren');
        $template->setTemplateEngine('twig');
        $manager->persist($template);
        $template->setId($id);
        $manager->persist($template);
        $manager->flush();

        $id = Uuid::fromString('88fefee9-474c-4713-a55c-0ca460882d8d');
        $template = new Template();
        $template->setName('Boeking');
        $template->setDescription('Bericht dat er een boeking is');
        $template->setContent('Er is een boeking voor uw locaties, kijk op uw dashboard om deze te acepteren');
        $template->setTemplateEngine('twig');
        $manager->persist($template);
        $template->setId($id);
        $manager->persist($template);
        $manager->flush();

        // Assent
        $id = Uuid::fromString('016d30d8-34dd-4841-a4af-8ad0a0f9d23f');
        $template = new Template();
        $template->setName('Instemming');
        $template->setDescription('Pagina waarop instemming kan worden verleend');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/assent.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        $manager->persist($template);
        $template->setId($id);
        $manager->persist($template);
        $manager->flush();
        $template = $manager->getRepository('App:Template')->findOneBy(['id'=> $id]);

        $page = new Page();
        $page->setName('Assent');
        $page->setTitle('Assent');
        $page->setDescription('Assent');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setName('assent');
        $slug->setSlug('assent');
        $manager->persist($page);

        // Trouwen (ofwel home)
        $id = Uuid::fromString('20219e4b-4dd0-4dc9-8768-3ecb33cf3d78');
        $template = new Template();
        $template->setName('Trouwen');
        $template->setDescription('De homepage van de trouw applicatie');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/trouwen.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        $manager->persist($template);
        $template->setId($id);
        $manager->persist($template);
        $manager->flush();
        $template = $manager->getRepository('App:Template')->findOneBy(['id'=> $id]);

        $page = new Page();
        $page->setName('Trouwen');
        $page->setTitle('Trouwen');
        $page->setDescription('trouwen');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setName('trouwen');
        $slug->setSlug('trouwen');
        $manager->persist($page);

        // Babs voor een dag
        $template = new Template();
        $template->setName('BABS voor een dag');
        $template->setDescription('BABS voor een dag');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/babs-voor-een-dag.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        $manager->persist($template);

        $page = new Page();
        $page->setName('BABS voor een dag');
        $page->setTitle('BABS voor een dag');
        $page->setDescription('BABS voor een dag');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setName('babs-voor-een-dag');
        $slug->setSlug('babs-voor-een-dag');
        $manager->persist($page);

        // Bas andere gemeente
        $template = new Template();
        $template->setName('Babs andere gemeente');
        $template->setDescription('Babs andere gemeente');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/babs-andere-gemeente.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        $manager->persist($template);

        $page = new Page();
        $page->setName('Babs andere gemeente');
        $page->setTitle('Babs andere gemeente');
        $page->setDescription('Babs andere gemeente');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setName('babs-andere-gemeente');
        $slug->setSlug('babs-andere-gemeente');
        $manager->persist($page);

        //afwijkende locatie
        $template = new Template();
        $template->setName('Afwijkende trouw locatie');
        $template->setDescription('Afwijkende trouw locatie');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/afwijkende-trouw-locatie.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        $manager->persist($template);

        $page = new Page();
        $page->setName('Afwijkende trouw locatie');
        $page->setTitle('Afwijkende trouw locatie');
        $page->setDescription('Afwijkende trouw locatie');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setName('afwijkende-trouw-locatie');
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setSlug('afwijkende-trouw-locatie');
        $manager->persist($page);

        $template = new Template();
        $template->setName('Afwijkende trouw locatie contact');
        $template->setDescription('Afwijkende trouw locatie contact');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/afwijkende-trouw-locatie-contact.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        $manager->persist($template);

        $page = new Page();
        $page->setName('Afwijkende trouw locatie contact');
        $page->setTitle('Afwijkende trouw locatie contact');
        $page->setDescription('Afwijkende trouw locatie contact');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setName('afwijkende-trouw-locatie-contact');
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setSlug('afwijkende-trouw-locatie-contact');
        $manager->persist($page);

        $template = new Template();
        $template->setName('Indienen afwijkende trouw locatie');
        $template->setDescription('Indienen afwijkende trouw locatie');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/indienen-afwijkende-trouw-locatie.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        $manager->persist($template);

        $page = new Page();
        $page->setName('Indienen afwijkende trouw locatie');
        $page->setTitle('Indienen afwijkende trouw locatie');
        $page->setDescription('Indienen afwijkende trouw locatie');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setName('indienen-afwijkende-trouw-locatie');
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setSlug('indienen-afwijkende-trouw-locatie');
        $manager->persist($page);

        $template = new Template();
        $template->setName('Indienen babs voor een dag');
        $template->setDescription('Indienen babs voor een dag');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/indienen-babs-voor-een-dag.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        $manager->persist($template);

        $page = new Page();
        $page->setName('Indienen babs voor een dag');
        $page->setTitle('Indienen babs voor een dag');
        $page->setDescription('Indienen babs voor een dag');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setName('indienen-babs-voor-een-dag');
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setSlug('indienen-babs-voor-een-dag');
        $manager->persist($page);

        $template = new Template();
        $template->setName('Indienen babs andere gemeente');
        $template->setDescription('Indienen babs andere gemeente');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/indienen-babs-andere-gemeente.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        $manager->persist($template);

        $page = new Page();
        $page->setName('Indienen babs andere gemeente');
        $page->setTitle('Indienen babs andere gemeente');
        $page->setDescription('Indienen babs andere gemeente');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setName('indienen-babs-andere-gemeente');
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setSlug('indienen-babs-andere-gemeente');
        $manager->persist($page);

        $template = new Template();
        $template->setName('Indienen Melding');
        $template->setDescription('Indienen Melding');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/indienen-melding.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        $manager->persist($template);

        $page = new Page();
        $page->setName('Indienen melding');
        $page->setTitle('Indienen melding');
        $page->setDescription('Indienen melding');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setName('indienen-melding');
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setSlug('indienen-melding');
        $manager->persist($page);

        // indienen
        $id = Uuid::fromString('ed2b2747-2152-456b-8bc3-2524799e1e86');
        $template = new Template();
        $template->setName('Overige vragen');
        $template->setDescription('');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/overig.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        $manager->persist($template);
        $template->setId($id);
        $manager->persist($template);
        $manager->flush();
        $template = $manager->getRepository('App:Template')->findOneBy(['id'=> $id]);

        $page = new Page();
        $page->setName('Overige vragen');
        $page->setTitle('Overige vragen');
        $page->setDescription('overig');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setName('overig');
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setSlug('overig');
        $manager->persist($page);

        // indienen
        $id = Uuid::fromString('50fe81a3-6723-4b9c-acf1-9a7c30f7cc4f');
        $template = new Template();
        $template->setName('Indienen');
        $template->setDescription('');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/indienen.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        $manager->persist($template);
        $template->setId($id);
        $manager->persist($template);
        $manager->flush();
        $template = $manager->getRepository('App:Template')->findOneBy(['id'=> $id]);

        $page = new Page();
        $page->setName('Indienen');
        $page->setTitle('Indienen');
        $page->setDescription('Indienen');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setName('indienen');
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setSlug('indienen');
        $manager->persist($page);

        // flow
        $id = Uuid::fromString('ba71c65e-7a82-449e-af15-947613ca6caa');
        $template = new Template();
        $template->setName('Checklist');
        $template->setDescription('');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/checklist.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        $manager->persist($template);
        $template->setId($id);
        $manager->persist($template);
        $manager->flush();
        $template = $manager->getRepository('App:Template')->findOneBy(['id'=> $id]);

        $page = new Page();
        $page->setName('Checklist');
        $page->setTitle('Checklist');
        $page->setDescription('Checklist');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setName('checklist');
        $slug->setSlug('checklist');
        $manager->persist($page);

        // flow
        $id = Uuid::fromString('cb0ada5b-185a-4c64-af20-9a21ac4deb3b');
        $template = new Template();
        $template->setName('Flow');
        $template->setDescription('Het boven menu (indien ingelogd) van de trouwplanner');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/flow.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        $manager->persist($template);
        $template->setId($id);
        $manager->persist($template);
        $manager->flush();
        $template = $manager->getRepository('App:Template')->findOneBy(['id'=> $id]);

        $page = new Page();
        $page->setName('Flow');
        $page->setTitle('Flow');
        $page->setDescription('Flow');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setName('flow');
        $slug->setSlug('flow');
        $manager->persist($page);

        // requests
        $id = Uuid::fromString('1855950c-e4b6-4a11-bfc7-5a2af7101b68');
        $template = new Template();
        $template->setName('Verzoeken');
        $template->setDescription('De verzoeks overizhcts pagina die wordt getoond na inloggen');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/requests.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        $manager->persist($template);
        $template->setId($id);
        $manager->persist($template);
        $manager->flush();
        $template = $manager->getRepository('App:Template')->findOneBy(['id'=> $id]);

        $page = new Page();
        $page->setName('Requests');
        $page->setTitle('Requests');
        $page->setDescription('Requests');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setSlug('requests');
        $slug->setName('requests');
        $manager->persist($page);

        $id = Uuid::fromString('6c749286-1178-453a-ba17-4e922686a4da');
        $template = new Template();
        $template->setName('Verander van Organisatie');
        $template->setDescription('De verzoeks overzichts pagina die wordt getoond na inloggen');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/switch-organization.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        $manager->persist($template);
        $template->setId($id);
        $manager->persist($template);
        $manager->flush();
        $template = $manager->getRepository('App:Template')->findOneBy(['id'=> $id]);

        $page = new Page();
        $page->setTitle('Verander van Organisatie');
        $page->setName('Verander van Organisatie');
        $page->setDescription('Verander van Organisatie');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setName('switch-organisation');
        $slug->setSlug('switch-organisation');
        $manager->persist($page);

        $id = Uuid::fromString('e2f9e1f1-c322-48bf-9b18-c822fee32283');
        $template = new Template();
        $template->setName('Verander Applicatie');
        $template->setDescription('De verzoeks overzichts pagina die wordt getoond na inloggen');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/switch-application.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        $manager->persist($template);
        $template->setId($id);
        $manager->persist($template);
        $manager->flush();
        $template = $manager->getRepository('App:Template')->findOneBy(['id'=> $id]);

        $page = new Page();
        $page->setName('Verander Applicatie');
        $page->setTitle('Verander Applicatie');
        $page->setDescription('Verander Applicatie');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setName('switch-application');
        $slug->setSlug('switch-application');
        $manager->persist($page);

        $id = Uuid::fromString('5b9fdd2f-273e-49c3-aa8d-2377be792b76');
        $template = new Template();
        $template->setName('Niew verzoek');
        $template->setDescription('De verzoeks overzichts pagina die wordt getoond na inloggen');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/new-request.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        $manager->persist($template);
        $template->setId($id);
        $manager->persist($template);
        $manager->flush();
        $template = $manager->getRepository('App:Template')->findOneBy(['id'=> $id]);

        $page = new Page();
        $page->setName('Niew verzoek');
        $page->setTitle('Niew verzoek');
        $page->setDescription('Niew verzoek');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setName('new-request');
        $slug->setSlug('new-request');
        $manager->persist($page);


        $id = Uuid::fromString('d19eb461-284b-4fe0-bd61-2e45ac7fe615');
        $template = new Template();
        $template->setName('Formulier');
        $template->setDescription('Een formulier pagina');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/form.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        $manager->persist($template);
        $template->setId($id);
        $manager->persist($template);
        $manager->flush();
        $template = $manager->getRepository('App:Template')->findOneBy(['id'=> $id]);

        $page = new Page();
        $page->setName('Formulier');
        $page->setTitle('Formulier');
        $page->setDescription('Formulier');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setName('form');
        $slug->setSlug('form');
        $manager->persist($page);

        // Organizations
        $id = Uuid::fromString('f99412f1-6e44-4a75-bc99-99201d08c4c8');
        $template = new Template();
        $template->setName('Organisaties');
        $template->setDescription('ia deze pagina kan er worden gewizeld van organisatie');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/organizations.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        $manager->persist($template);
        $template->setId($id);
        $manager->persist($template);
        $manager->flush();
        $template = $manager->getRepository('App:Template')->findOneBy(['id'=> $id]);

        $page = new Page();
        $page->setName('Wissel organisatie');
        $page->setTitle('Wissel organisatie');
        $page->setDescription('Via deze pagina kan er worden gewizeld van organisatie');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setName('organizations');
        $slug->setSlug('organizations');
        $manager->persist($page);

        // pagina 0
        $id = Uuid::fromString('2cd41267-4eda-452b-9299-7d6596593f83');
        $template = new Template();
        $template->setName('Start ');
        $template->setDescription('Start pagina voor huwelijks proces');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/pagina0.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        $manager->persist($template);
        $template->setId($id);
        $manager->persist($template);
        $manager->flush();
        $template = $manager->getRepository('App:Template')->findOneBy(['id'=> $id]);

        $page = new Page();
        $page->setName('Start');
        $page->setTitle('Start');
        $page->setDescription('Start');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setName('start-huwelijk');
        $slug->setSlug('start-huwelijk');
        $manager->persist($page);

        // Getuigen
        $id = Uuid::fromString('da78b8bb-16bf-449c-96e3-3615e9e8e2af');
        $template = new Template();
        $template->setName('Getuigen kiezen');
        $template->setDescription('Informatie pagina over getuigen');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/getuigen-kiezen.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        $manager->persist($template);
        $template->setId($id);
        $manager->persist($template);
        $manager->flush();
        $template = $manager->getRepository('App:Template')->findOneBy(['id'=> $id]);

        $page = new Page();
        $page->setName('Getuigen');
        $page->setTitle('Getuigen');
        $page->setDescription('Over getuigen');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setName('getuigen-kiezen');
        $slug->setSlug('getuigen-kiezen');
        $manager->persist($page);

        // Getuigen
        $id = Uuid::fromString('75de9a49-e89a-4a9d-8efc-135be48e98ac');
        $template = new Template();
        $template->setName('Getuigen');
        $template->setDescription('Pagina waarop getuigen kunnen worden toegevoegd');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/getuigen.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        $manager->persist($template);
        $template->setId($id);
        $manager->persist($template);
        $manager->flush();
        $template = $manager->getRepository('App:Template')->findOneBy(['id'=> $id]);

        // tot hier gekomen

        $page = new Page();
        $page->setName('Getuigen');
        $page->setTitle('Getuigen');
        $page->setDescription('Over getuigen');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setPage($page);
        $slug->setName('getuige');
        $slug->setApplication($application);
        $slug->setSlug('getuige');
        $manager->persist($page);

        // Naamsgerbuik
        $id = Uuid::fromString('648e2ce2-e157-42ac-8bac-1fa59032bbfc');
        $template = new Template();
        $template->setName('Naamsgebruik');
        $template->setDescription('Pagina over naamsgebruik bij een huwelijk');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/naamsgebruik.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        $manager->persist($template);
        $template->setId($id);
        $manager->persist($template);
        $manager->flush();
        $template = $manager->getRepository('App:Template')->findOneBy(['id'=> $id]);

        $page = new Page();
        $page->setName('Naamsgebruik');
        $page->setTitle('Naamsgebruik');
        $page->setDescription('Over naamsgebruik');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setPage($page);
        $slug->setName('naamsgebruik');
        $slug->setApplication($application);
        $slug->setSlug('naamsgebruik');
        $manager->persist($page);

        // Melding
        $id = Uuid::fromString('ea817100-a03d-4fd3-ae7b-3d39b9c577f9');
        $template = new Template();
        $template->setName('Melding');
        $template->setDescription('Pagina met informatie over het doen van een melding van een huwelijk');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/melding.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        $manager->persist($template);
        $template->setId($id);
        $manager->persist($template);
        $manager->flush();
        $template = $manager->getRepository('App:Template')->findOneBy(['id'=> $id]);

        $page = new Page();
        $page->setName('Melding');
        $page->setTitle('Melding');
        $page->setDescription('Over melding');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setName('melding');
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setSlug('melding');
        $manager->persist($page);

        // Plechtigheid
        $id = Uuid::fromString('013276cc-1483-46b4-ad5b-1cba5acf6d9f');
        $template = new Template();
        $template->setName('Plechtigheid');
        $template->setDescription('Pagina waarop het product voor het huwelijk kan worden gekozen');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/plechtigheden.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        $manager->persist($template);
        $template->setId($id);
        $manager->persist($template);
        $manager->flush();
        $template = $manager->getRepository('App:Template')->findOneBy(['id'=> $id]);

        $page = new Page();
        $page->setName('Plechtigheid');
        $page->setTitle('Plechtigheid');
        $page->setDescription('Plechtigheid');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setName('plechtigheid');
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setSlug('plechtigheid');
        $manager->persist($page);


        $id = Uuid::fromString('310d1039-abdf-4983-9030-608cd3012306');
        $template = new Template();
        $template->setName('Plechtigheid');
        $template->setDescription('Pagina waarop het product voor het huwelijk kan worden gekozen');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/plechtigheid.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        $manager->persist($template);
        $template->setId($id);
        $manager->persist($template);
        $manager->flush();
        $template = $manager->getRepository('App:Template')->findOneBy(['id'=> $id]);

        $page = new Page();
        $page->setName('Plechtigheid');
        $page->setTitle('Plechtigheid');
        $page->setDescription('Plechtigheid');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setSlug('plechtigheid-kiezen');
        $slug->setName('plechtigheid-kiezen');
        $manager->persist($page);

        // Ceremonie
        $id = Uuid::fromString('1370d87a-fe90-4826-a210-fd8e1c065576');
        $template = new Template();
        $template->setName('Cremonies');
        $template->setDescription('Pagina waarop een trouw ceremonie kan worden gekozen');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/ceremonies.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        $manager->persist($template);
        $template->setId($id);
        $manager->persist($template);
        $manager->flush();
        $template = $manager->getRepository('App:Template')->findOneBy(['id'=> $id]);

        $page = new Page();
        $page->setName('Ceremonies');
        $page->setTitle('Ceremonies');
        $page->setDescription('Ceremonies');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setSlug('ceremonie');
        $slug->setName('ceremonie');
        $manager->persist($page);

        // Partners
        //$id = Uuid::fromString('1370d87a-fe90-4826-a210-fd8e1c065576');
        $template = new Template();
        $template->setName('Partners');
        $template->setDescription('De pagina waarop je partners kan toevoegen');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/partners.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        //$manager->persist($template);
        //$template->setId($id);
        $manager->persist($template);
        $manager->flush();
        //$template= $manager->getRepository('App:Template')->findOneBy(array('id'=> $id));

        $page = new Page();
        $page->setTitle('Partners');
        $page->setName('Partners');
        $page->setDescription('Partners');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setSlug('partner');
        $slug->setName('partner');
        $manager->persist($page);

        // Datum
        //$id = Uuid::fromString('1370d87a-fe90-4826-a210-fd8e1c065576');
        $template = new Template();
        $template->setName('Datum');
        $template->setDescription('De pagina waarop je een datum kan selecteren');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/datum.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        //$manager->persist($template);
        //$template->setId($id);
        $manager->persist($template);
        $manager->flush();
        //$template= $manager->getRepository('App:Template')->findOneBy(array('id'=> $id));

        $page = new Page();
        $page->setTitle('Datum');
        $page->setName('Datum');
        $page->setDescription('Datum');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setSlug('datum');
        $slug->setName('datum');
        $manager->persist($page);

        // Betalen
        //$id = Uuid::fromString('1370d87a-fe90-4826-a210-fd8e1c065576');
        $template = new Template();
        $template->setName('Betalen');
        $template->setDescription('De pagina waarop je kan betalen');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/betalen.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        //$manager->persist($template);
        //$template->setId($id);
        $manager->persist($template);
        $manager->flush();
        //$template= $manager->getRepository('App:Template')->findOneBy(array('id'=> $id));

        $page = new Page();
        $page->setTitle('betalen');
        $page->setName('betalen');
        $page->setDescription('betalen');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setName('betalen');
        $slug->setSlug('betalen');
        $manager->persist($page);

        // Products
        $id = Uuid::fromString('14df39f8-46f7-49b4-9b0c-c1c4761bcb2f');
        $template = new Template();
        $template->setName('Product');
        $template->setDescription('');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/product.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        $manager->persist($template);
        $template->setId($id);
        $manager->persist($template);
        $manager->flush();
        $template = $manager->getRepository('App:Template')->findOneBy(['id'=> $id]);

        $page = new Page();
        $page->setName('Product');
        $page->setTitle('Product');
        $page->setDescription('Product');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setSlug('product');
        $slug->setName('product');
        $manager->persist($page);

        $id = Uuid::fromString('b747ea1f-e061-4ec8-8f92-959f6a1e2dd0');
        $template = new Template();
        $template->setName('Producten');
        $template->setDescription('');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/products.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        $manager->persist($template);
        $template->setId($id);
        $manager->persist($template);
        $manager->flush();
        $template = $manager->getRepository('App:Template')->findOneBy(['id'=> $id]);

        $page = new Page();
        $page->setName('Producten');
        $page->setTitle('Producten');
        $page->setDescription('Producten');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setName('producten');
        $slug->setSlug('producten');
        $manager->persist($page);

        // Ambtenaren
        $id = Uuid::fromString('28268026-6f82-4b19-8dc7-a325edfeca82');
        $template = new Template();
        $template->setName('Ambtenaar');
        $template->setDescription('');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/ambtenaar.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        $manager->persist($template);
        $template->setId($id);
        $manager->persist($template);
        $manager->flush();
        $template = $manager->getRepository('App:Template')->findOneBy(['id'=> $id]);

        $page = new Page();
        $page->setTitle('Ambtenaar');
        $page->setName('Ambtenaar');
        $page->setDescription('Ambtenaar');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setSlug('ambtenaar-kiezen');
        $slug->setName('ambtenaar-kiezen');
        $manager->persist($page);

        $id = Uuid::fromString('3450ae40-3c07-4e09-83c2-f0c54e3b574a');
        $template = new Template();
        $template->setName('Ambtenaren');
        $template->setDescription('');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/ambtenaren.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        $manager->persist($template);
        $template->setId($id);
        $manager->persist($template);
        $manager->flush();
        $template = $manager->getRepository('App:Template')->findOneBy(['id'=> $id]);

        $page = new Page();
        $page->setTitle('Ambtenaren');
        $page->setName('Ambtenaren');
        $page->setDescription('Ambtenaren');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setName('ambtenaar');
        $slug->setSlug('ambtenaar');
        $manager->persist($page);

        // Locatie
        $id = Uuid::fromString('e2615a62-95a5-43a4-8ab7-efaa8777ed7f');
        $template = new Template();
        $template->setName('Locatie');
        $template->setDescription('');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/locatie.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        $manager->persist($template);
        $template->setId($id);
        $manager->persist($template);
        $manager->flush();
        $template = $manager->getRepository('App:Template')->findOneBy(['id'=> $id]);

        $page = new Page();
        $page->setTitle('Locatie');
        $page->setName('Locatie');
        $page->setDescription('Locatie');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setSlug('locatie-kiezen');
        $slug->setName('locatie-kiezen');
        $manager->persist($page);

        $id = Uuid::fromString('0bd283c4-771c-4ee0-b87f-8ce40dabe6a1');
        $template = new Template();
        $template->setName('Locaties');
        $template->setDescription('');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/locaties.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        $manager->persist($template);
        $template->setId($id);
        $manager->persist($template);
        $manager->flush();
        $template = $manager->getRepository('App:Template')->findOneBy(['id'=> $id]);

        $page = new Page();
        $page->setTitle('Locatie');
        $page->setName('Locatie');
        $page->setDescription('Locaties');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setSlug('locatie');
        $slug->setName('locatie');
        $manager->persist($page);

        // Extras
        //$id = Uuid::fromString('50409369-6f28-4f9e-b074-2fa638d1b25a');
        $template = new Template();
        $template->setName('Extra');
        $template->setDescription('');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/extra.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        //$manager->persist($template);
        //$template->setId($id);
        $manager->persist($template);
        $manager->flush();
        //$template= $manager->getRepository('App:Template')->findOneBy(array('id'=> $id));

        $page = new Page();
        $page->setTitle('Extra');
        $page->setName('Extra');
        $page->setDescription('Extra');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setSlug('extra-kiezen');
        $slug->setName('extra-kiezen');
        $manager->persist($page);

        $id = Uuid::fromString('50409369-6f28-4f9e-b074-2fa638d1b25a');
        $template = new Template();
        $template->setName('Extras');
        $template->setDescription('');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/extras.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        $manager->persist($template);
        $template->setId($id);
        $manager->persist($template);
        $manager->flush();
        $template = $manager->getRepository('App:Template')->findOneBy(['id'=> $id]);

        $page = new Page();
        $page->setTitle('Extras');
        $page->setName('Extras');
        $page->setDescription('Extras');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setSlug('extra');
        $slug->setName('extra');
        $manager->persist($page);

        $manager->flush();

        $template = new Template();
        $template->setName('FAQ');
        $template->setDescription('');
        $template->setContent(file_get_contents(dirname(__FILE__).'/Resources/faq.html.twig', 'r'));
        $template->setTemplateEngine('twig');
        //$manager->persist($template);
        //$template->setId($id);
        $manager->persist($template);
        $manager->flush();

        $page = new Page();
        $page->setTitle('FAQ');
        $page->setName('FAQ');
        $page->setDescription('Frequently Asked Questions');
        $page->setApplication($application);
        $page->setTemplate($template);
        $manager->persist($page);

        $slug = new Slug();
        $slug->setPage($page);
        $slug->setApplication($application);
        $slug->setSlug('faq');
        $slug->setName('faq');
        $manager->persist($page);
        $manager->flush();

        $id = Uuid::fromString('e04defee-0bb3-4e5c-b21d-d6deb76bd1bc');
        $template = new Template();
        $template->setName('E-mail instemming');
        $template->setTitle('Instemming voor een huwelijk');
        $template->setDescription('');
        $template->setContent('Beste {{ contact.givenName }},<br><br>Uw instemming is gevraagd bij een instemmingsverzoek.<br><br><a href="{{ assent[\'@id\'] }}">Klik hier</a> om op dit verzoek te reageren.<br><br>Met vriendelijke groet,<br><br>Gemeente Utrecht');
        $template->setTemplateEngine('twig');
        $manager->persist($template);
        $template->setId($id);
        $manager->persist($template);
        $manager->flush();

        $id = Uuid::fromString('66e43592-22a2-49c2-8c3e-10d9a00d5487');
        $template = new Template();
        $template->setName('E-mail aanvraag');
        $template->setTitle('Aanvraag huwelijksplanner');
        $template->setDescription('');
        $template->setContent('Beste {{ contact.givenName }},<br><br>U heeft een aanvraag insgestuurd voor een {{ requestType.name }} bij de gemeente Utrecht.<br><br><a href="https://huwelijksplanner.online/?request={{ request[\'@id\'] }}">Klik hier</a> om op dit uw aanvraag in te zien<br><br>Met vriendelijke groet,<br><br>Gemeente Utrecht');
        $template->setTemplateEngine('twig');
        $manager->persist($template);
        $template->setId($id);
        $manager->persist($template);
        $manager->flush();


    }
}
