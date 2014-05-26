This update site supplies installable content for the samples page of the welcome screen.

The site is accessed through the pde website on www.eclipse.org.  The install is performed by 
org.eclipse.pde.internal.ui.samples.ShowSampleAction.

To create a new version of the samples IU for install, copy the last version of the plug-in and 
feature. Rename and reversion the feature.xml, feature.properties, manifest.mf and jars. Add the
new version to the site.xml  Then you can replace the example content in the plug-in.  The content
of the inner zip files appears to match the source content found in the appropriate git repository.

May 26, 2014