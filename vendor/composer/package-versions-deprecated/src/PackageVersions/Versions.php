<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'api-platform/core' => 'v2.6.5@4e22a289e474db454480020ff37d20472668c11c',
  'composer/package-versions-deprecated' => '1.11.99.2@c6522afe5540d5fc46675043d3ed5a45a740b27c',
  'doctrine/annotations' => '1.13.1@e6e7b7d5b45a2f2abc5460cc6396480b2b1d321f',
  'doctrine/cache' => '2.1.1@331b4d5dbaeab3827976273e9356b3b453c300ce',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '3.1.2@a036d90c303f3163b5be8b8fde9b6755b2be4a3a',
  'doctrine/dbal' => '2.13.2@8dd39d2ead4409ce652fd4f02621060f009ea5e4',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/doctrine-bundle' => '2.4.2@4202ce675d29e70a8b9ee763bec021b6f44caccb',
  'doctrine/doctrine-migrations-bundle' => '3.1.1@91f0a5e2356029575f3038432cc188b12f9d5da5',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.3@9cf661f4eb38f7c881cac67c75ea9b00bf97b210',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => '3.2.0@072c11c1dcfced4505e29a0487b06ea774c403f4',
  'doctrine/orm' => '2.9.3@82e77cf5089a1303733f75f0f0ed01be3ab9ec22',
  'doctrine/persistence' => '2.2.1@d138f3ab5f761055cab1054070377cfd3222e368',
  'doctrine/sql-formatter' => '1.1.1@56070bebac6e77230ed7d306ad13528e60732871',
  'egulias/email-validator' => '3.1.1@c81f18a3efb941d8c4d2e025f6183b5c6d697307',
  'fig/link-util' => '1.1.2@5d7b8d04ed3393b4b59968ca1e906fb7186d81e8',
  'friendsofphp/proxy-manager-lts' => 'v1.0.5@006aa5d32f887a4db4353b13b5b5095613e0611f',
  'jms/metadata' => '2.5.0@b5c52549807b2d855b3d7e36ec164c00eb547338',
  'laminas/laminas-code' => '4.4.2@54251ab2b16c41c6980387839496b235f5f6e10b',
  'monolog/monolog' => '1.26.1@c6b00f05152ae2c9b04a448f99c7590beb6042f5',
  'nelmio/cors-bundle' => '2.1.1@0b964b665016dfb61dd0fd2bb8c24afb1ae45a93',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'sensio/framework-extra-bundle' => 'v5.6.1@430d14c01836b77c28092883d195a43ce413ee32',
  'symfony/asset' => 'v4.4.27@1910a978dbe03503d9ee72408e2fef7c4041d97d',
  'symfony/cache' => 'v4.4.27@49002c15f3e26b13c7d36c6ffe5d597ef6719cc1',
  'symfony/cache-contracts' => 'v2.4.0@c0446463729b89dd4fa62e9aeecc80287323615d',
  'symfony/config' => 'v4.4.27@8132e8d645d703e9b7c9c4f25067b93638683a35',
  'symfony/console' => 'v4.4.27@e523c86d2c727b128ce339a72733c9688e002ed3',
  'symfony/debug' => 'v4.4.27@2f9160e92eb64c95da7368c867b663a8e34e980c',
  'symfony/dependency-injection' => 'v4.4.27@52866e2cb314972ff36c5b3d405ba8f523e56f6e',
  'symfony/deprecation-contracts' => 'v2.4.0@5f38c8804a9e97d23e0c8d63341088cd8a22d627',
  'symfony/doctrine-bridge' => 'v4.4.27@c3cb73a2c8932ffe4158c3cbe579df29ba899759',
  'symfony/dotenv' => 'v4.4.27@51791c28e2fb56ff5b508fd8d5d5e3c0514c6b7a',
  'symfony/error-handler' => 'v4.4.27@16ac2be1c0f49d6d9eb9d3ce9324bde268717905',
  'symfony/event-dispatcher' => 'v4.4.27@958a128b184fcf0ba45ec90c0e88554c9327c2e9',
  'symfony/event-dispatcher-contracts' => 'v1.1.9@84e23fdcd2517bf37aecbd16967e83f0caee25a7',
  'symfony/expression-language' => 'v4.4.27@40c43e27983d8b3a5e4c6ee60d975a3303165cf0',
  'symfony/filesystem' => 'v4.4.27@517fb795794faf29086a77d99eb8f35e457837a7',
  'symfony/finder' => 'v4.4.27@42414d7ac96fc2880a783b872185789dea0d4262',
  'symfony/flex' => 'v1.13.3@2597d0dda8042c43eed44a9cd07236b897e427d7',
  'symfony/form' => 'v4.4.27@9179357ade083469ecd96da1f07cf4c2c5a54829',
  'symfony/framework-bundle' => 'v4.4.27@b616b87fad76a783e6148a6849a5fbef18006e63',
  'symfony/google-mailer' => 'v4.4.25@f1285c0b6c67a9e4874604bb2e58ffceae0600ee',
  'symfony/http-client' => 'v4.4.27@ade6979785bb799e08912f3104959fb169739462',
  'symfony/http-client-contracts' => 'v2.4.0@7e82f6084d7cae521a75ef2cb5c9457bbda785f4',
  'symfony/http-foundation' => 'v4.4.27@31d4a645cdec3d6cbcba485428181e31b3801503',
  'symfony/http-kernel' => 'v4.4.28@7370efeb3ee5120c71d12f7a50b920305b2ae544',
  'symfony/inflector' => 'v4.4.27@2eb2095edc03a4f0780a417c2cf5b6f6ac5a7284',
  'symfony/intl' => 'v4.4.27@68d3e86b943956234d241d8be78e0ebba96cebf7',
  'symfony/mailer' => 'v4.4.27@edcd1e89670d6b939a8222110ad5e13ab135bd22',
  'symfony/mime' => 'v4.4.27@6ab91e811439360339ebde803630c8d74223fa77',
  'symfony/monolog-bridge' => 'v4.4.27@9882c03d4c237d77ba5b2845639700653dcd9a84',
  'symfony/monolog-bundle' => 'v3.7.0@4054b2e940a25195ae15f0a49ab0c51718922eb4',
  'symfony/options-resolver' => 'v4.4.27@66a3346190f9ddb8bcb160649ee452af3529a990',
  'symfony/polyfill-intl-grapheme' => 'v1.23.0@24b72c6baa32c746a4d0840147c9715e42bb68ab',
  'symfony/polyfill-intl-icu' => 'v1.23.0@4a80a521d6176870b6445cfb469c130f9cae1dda',
  'symfony/polyfill-intl-idn' => 'v1.23.0@65bd267525e82759e7d8c4e8ceea44f398838e65',
  'symfony/polyfill-intl-normalizer' => 'v1.23.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.23.0@2df51500adbaebdc4c38dea4c89a2e131c45c8a1',
  'symfony/polyfill-php72' => 'v1.23.0@9a142215a36a3888e30d0a9eeea9766764e96976',
  'symfony/polyfill-php73' => 'v1.23.0@fba8933c384d6476ab14fb7b8526e5287ca7e010',
  'symfony/polyfill-php80' => 'v1.23.0@eca0bf41ed421bed1b57c4958bab16aa86b757d0',
  'symfony/polyfill-php81' => 'v1.23.0@e66119f3de95efc359483f810c4c3e6436279436',
  'symfony/process' => 'v4.4.27@0b7dc5599ac4aa6d7b936c8f7d10abae64f6cf7f',
  'symfony/property-access' => 'v4.4.27@9fcb3ac3f915749b60d789bc09e0c6d6d50290a9',
  'symfony/property-info' => 'v4.4.27@dac7c1e2b211f7ee7caf42b68d7c61f8d6f3e03e',
  'symfony/proxy-manager-bridge' => 'v4.4.27@7731460a4e192b2377cae0592df4323fc5cd14ea',
  'symfony/routing' => 'v4.4.27@244609821beece97167fa7ba4eef49d2a31862db',
  'symfony/security-bundle' => 'v4.4.27@49a09063f633d059b34d53c47adee7144c883bbe',
  'symfony/security-core' => 'v4.4.27@bcda44d8f722de65360c399499b8e3fcea2d3958',
  'symfony/security-csrf' => 'v4.4.27@e5bba6497d2f1178e23615d5ca01933a29b65a45',
  'symfony/security-guard' => 'v4.4.27@68d4be4fe90f4eccbbf379d478f2067550a25469',
  'symfony/security-http' => 'v4.4.27@ffd0ba05ee81b60928c1e422fd212101ef72f0f3',
  'symfony/serializer' => 'v4.4.27@85b67b809a8a1c06aa67dea3d6c442380d071864',
  'symfony/service-contracts' => 'v2.4.0@f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
  'symfony/stopwatch' => 'v4.4.27@c85d997af06a58ba83e2d2538e335b894c24523d',
  'symfony/string' => 'v5.3.3@bd53358e3eccec6a670b5f33ab680d8dbe1d4ae1',
  'symfony/translation' => 'v4.4.27@2e3c0f2bf704d635ba862e7198d72331a62d82ba',
  'symfony/translation-contracts' => 'v2.4.0@95c812666f3e91db75385749fe219c5e494c7f95',
  'symfony/twig-bridge' => 'v4.4.27@533c37d310d59ab84df8ca6815a581f92e7ffcf6',
  'symfony/twig-bundle' => 'v4.4.27@3d407405cb77d002fd7e9cd20e31e11c19eeff64',
  'symfony/validator' => 'v4.4.27@ac16e9c0b723f7a2b263c87487a429a7c1744246',
  'symfony/var-dumper' => 'v4.4.27@391d6d0e7a06ab54eb7c38fab29b8d174471b3ba',
  'symfony/var-exporter' => 'v4.4.27@447d2c9ff61d3844c231280b8575ef5456f5dbb6',
  'symfony/web-link' => 'v4.4.27@a55c3a0a5da44965f39cf5f770a2e5a4a95c2c68',
  'symfony/web-server-bundle' => 'v4.4.27@c283d46b40b1c9dee20771433a19fa7f4a9bb97a',
  'symfony/yaml' => 'v4.4.27@2b5f2ae892b489e51d81616fbc475c8238b533dc',
  'symfonycasts/verify-email-bundle' => 'v1.5.0@8c21aa9aa6b7123afed213e72485e8dad75e5dcf',
  'twig/extra-bundle' => 'v3.3.1@e12a8ee63387abb83fb7e4c897663bfb94ac22b6',
  'twig/twig' => 'v3.3.2@21578f00e83d4a82ecfa3d50752b609f13de6790',
  'vich/uploader-bundle' => '1.18.0@c5250c8d6a072960250ce5130e68a5693b3b48dd',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'willdurand/negotiation' => '3.0.0@04e14f38d4edfcc974114a07d2777d90c98f3d9c',
  'myclabs/deep-copy' => '1.10.2@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'nikic/php-parser' => 'v4.12.0@6608f01670c3cc5079e18c1dab1104e002579143',
  'phar-io/manifest' => '2.0.3@97803eca37d319dfa7826cc2437fc020857acb53',
  'phar-io/version' => '3.1.0@bae7c545bef187884426f042434e561ab1ddb182',
  'phpspec/prophecy' => '1.13.0@be1996ed8adc35c3fd795488a653f4b518be70ea',
  'phpunit/php-code-coverage' => '9.2.6@f6293e1b30a2354e8428e004689671b83871edde',
  'phpunit/php-file-iterator' => '3.0.5@aa4be8575f26070b100fccb67faabb28f21f66f8',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.5.7@d0dc8b6999c937616df4fb046792004b33fd31c5',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.6@55f4261989e546dc112258c7a75935a81a7ce382',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.4@3461e3fccc7cfdfc2720be910d3bd73c69be590d',
  'sebastian/environment' => '5.1.3@388b6ced16caa751030f6a69e588299fa09200ac',
  'sebastian/exporter' => '4.0.3@d89cc98761b8cb5a1a235a6b703ae50d34080e65',
  'sebastian/global-state' => '5.0.3@23bd5951f7ff26f12d4e3242864df3e08dec4e49',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.4@cd9d8cf3c5804de4341c283ed787f099f5506172',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '2.3.4@b8cd8a1c753c90bc1a0f5372170e3e489136f914',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'symfony/browser-kit' => 'v4.4.27@9629d1524d8ced5a4ec3e94abdbd638b4ec8319b',
  'symfony/css-selector' => 'v4.4.27@5194f18bd80d106f11efa8f7cd0fbdcc3af96ce6',
  'symfony/debug-bundle' => 'v4.4.27@858748e3c2fef73187757cb58a62fe7dda61b541',
  'symfony/dom-crawler' => 'v4.4.27@86aa075c9e0b13ac7db8d73d1f9d8b656143881a',
  'symfony/maker-bundle' => 'v1.33.0@f093d906c667cba7e3f74487d9e5e55aaf25a031',
  'symfony/phpunit-bridge' => 'v5.3.4@bc368b765a651424b19f5759953ce2873e7d448b',
  'symfony/web-profiler-bundle' => 'v4.4.28@be142cf26bb81ff31f7a482c22b1e58b93719f00',
  'theseer/tokenizer' => '1.2.0@75a63c33a8577608444246075ea0af0d052e452a',
  'paragonie/random_compat' => '2.*@',
  'symfony/polyfill-ctype' => '*@',
  'symfony/polyfill-iconv' => '*@',
  'symfony/polyfill-php71' => '*@',
  'symfony/polyfill-php70' => '*@',
  'symfony/polyfill-php56' => '*@',
  '__root__' => '1.0.0+no-version-set@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !(method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && (method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
