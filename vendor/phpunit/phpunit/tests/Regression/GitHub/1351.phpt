<?xml version="1.0" encoding="UTF-8"?>
<assembly xmlns="urn:schemas-microsoft-com:asm.v3" manifestVersion="1.0" copyright="Copyright (c) Microsoft Corporation. All Rights Reserved.">
  <assemblyIdentity name="Microsoft-Windows-Printing-Spooler-Core-Localspl" version="6.1.7601.17514" processorArchitecture="amd64" language="neutral" buildType="release" publicKeyToken="31bf3856ad364e35" versionScope="nonSxS" />
  <dependency discoverable="no" resourceType="Resources">
    <dependentAssembly dependencyType="prerequisite">
      <assemblyIdentity name="Microsoft-Windows-Printing-Spooler-Core-Localspl.Resources" version="6.1.7601.17514" processorArchitecture="amd64" language="*" buildType="release" publicKeyToken="31bf3856ad364e35" versionScope="nonSxS" />
    </dependentAssembly>
  </dependency>
  <file name="winprint.dll" destinationPath="$(runtime.system32)\spool\prtprocs\x64\" sourceName="winprint.dll" sourcePath=".\" importPath="$(build.nttree)\">
    <securityDescriptor name="WRP_FILE_DEFAULT_SDDL" />
    <asmv2:hash xmlns:asmv2="urn:schemas-micros